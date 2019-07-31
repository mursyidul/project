<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_karyawan');
	}

	public function index(){
		$karyawan['karyawan'] = $this->Model_karyawan->lihat_karyawan();
		$this->load->view('karyawan', $karyawan);
	}

	public function tambah(){
		$this->load->view('tambah-karyawan');
	}

	public function tambah_proses(){
		if($this->input->post('simpan')){
			$nik = $this->input->post('nik');
			$nama_karyawan= $this->input->post('nama_karyawan');
			$alamat = $this->input->post('alamat');
			$bagian = $this->input->post('bagian');
			$tempat = $this->input->post('tempat');
			$tgl_lahir = $this->input->post('tgl_lahir');
			$status = $this->input->post('status');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$simpan_karyawan = array(
				'nik' => $nik,
				'nama' => $nama_karyawan,
				'alamat' => $alamat,
				'tempat' => $tempat,
				'tgl_lahir' => $tgl_lahir,
				'status' => $status,
				'jenis_kelamin' => $jenis_kelamin,
				'bagian' => $bagian
				);

			$simpan_users = array(
				'nik' => $nik,
				'username' => $username,
				'password' => md5($password),
				'bagian' => 'karyawan'
				);

			$simpan_proses = $this->Model_karyawan->simpan_proses($simpan_karyawan, $simpan_users);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Tambah Data Anggota Berhasil !!!</div>");
			redirect('karyawan');
			
		}
	}

	public function edit($nik){
		$karyawan['karyawan'] = $this->Model_karyawan->edit($nik);
		$this->load->view('edit-karyawan', $karyawan);
	}

	public function edit_proses($nik){
		if($this->input->post('simpan')){
			$nama_karyawan= $this->input->post('nama_karyawan');
			$alamat = $this->input->post('alamat');
			$tempat = $this->input->post('tempat');
			$tgl_lahir = $this->input->post('tgl_lahir');
			$status = $this->input->post('status');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$bagian = $this->input->post('bagian');

			$simpan = array(
				'nama' => $nama_karyawan,
				'alamat' => $alamat,
				'tempat' => $tempat,
				'tgl_lahir' => $tgl_lahir,
				'status' => $status,
				'jenis_kelamin' => $jenis_kelamin,
				'bagian' => $bagian
				);

			$edit_proses = $this->Model_karyawan->edit_proses($simpan, $nik);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Edit Data Karyawan Berhasil !!!</div>");
			redirect('karyawan');
			
		}
	}

	public function edit_password($nik){
		$karyawan['karyawan'] = $this->Model_karyawan->edit($nik);
		$this->load->view('edit-password-karyawan', $karyawan);
	}

	public function edit_password_proses($nik){
		$pass_lama = $this->input->post('pass_lama');
		$pass_baru = $this->input->post('pass_baru');
		$kon = $this->input->post('konf_pass');

		$cek_pass = $this->Model_karyawan->cek_pass($pass_lama, $nik);

		if($cek_pass == FALSE){
			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Ubah Password Gagal !!!</div>");
			redirect('karyawan/edit-password/'.$nik);
		} else {
			$this->form_validation->set_rules('pass_baru','Password Baru','required');
			$this->form_validation->set_rules('konf_pass','Konfirmasi Password', 'matches[pass_baru]');
			if($this->form_validation->run() == FALSE){
				$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Ubah Password Gagal !!!</div>");
				redirect('karyawan/edit-password/'.$nik);
			} else {
				$simpan = array(
					'password' => md5($pass_baru)
					);
				$this->Model_karyawan->edit_password_proses($simpan, $nik);
				$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Ubah Password Berhasil !!!</div>");
				redirect('karyawan');
			}
		}
	}

	public function hapus($nik){
		$this->Model_karyawan->hapus($nik);

		$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Hapus Data Karyawan Berhasil !!!</div>");
		redirect('karyawan');
	}

}
