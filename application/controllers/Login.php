<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_login');
		$this->load->model('Model_karyawan');
	}

	public function index(){
		$this->load->view('login');
	}

	public function proses(){
		$cek_user = $this->Model_login->cek_user();

		if($cek_user == FALSE){
			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Username dan Password salah atau belum terdaftar !!!</div>");
			redirect(base_url());
		} else {
			$this->session->set_userdata('id_users',$cek_user->id_users);
			$this->session->set_userdata('nik',$cek_user->nik);
			$this->session->set_userdata('username',$cek_user->username);
			$this->session->set_userdata('bagian',$cek_user->bagian);
			$this->session->set_userdata('status','login');

			redirect('dashboard');
		}
	}

	public function register(){
		$this->load->view('register');
	}

	public function daftar_proses(){
		if($this->input->post('simpan')){
			$nik = $this->input->post('nik');
			$nama_karyawan= $this->input->post('nama_karyawan');
			$alamat = $this->input->post('alamat');
			$tempat = $this->input->post('tempat');
			$tgl_lahir = $this->input->post('tgl_lahir');
			$status = $this->input->post('status');
			$jenis_kelamin= $this->input->post('jenis_kelamin');
			$bagian = $this->input->post('bagian');
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

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Pendaftaran Karyawan Berhasil !!!</div>");
			redirect(base_url());
			
		}
	}
}
