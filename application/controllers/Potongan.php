<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Potongan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_potongan');
	}

	public function index(){
		$bagian['potongan'] = $this->Model_potongan->lihat_bagian();
		$bagian['makan'] = $this->Model_potongan->lihat_makan();
		$bagian['lembur'] = $this->Model_potongan->lihat_lembur();
		$bagian['alpha'] = $this->Model_potongan->lihat_alpha();
		$bagian['bpjs'] = $this->Model_potongan->lihat_bpjs();
		$this->load->view('potongan', $bagian);
	}

	public function tambah(){
		$this->load->view('tambah-bagian');
	}

	public function tambah_proses(){
		if($this->input->post('simpan')){
			$nama_bagian = $this->input->post('nama_bagian');
			$gaji = $this->input->post('gaji');

			$simpan = array(
				'bagian' => $nama_bagian,
				'gaji' => $gaji
				);

			$simpan_proses = $this->Model_bagian->simpan_proses($simpan);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Tambah Data Bagian Berhasil !!!</div>");
			redirect('bagian');
			
		}
	}

	public function edit($id){
		$bagian['potongan'] = $this->Model_potongan->edit($id);
		$this->load->view('edit-potongan', $bagian);
	}

	public function edit1($id){
		$bagian['makan'] = $this->Model_potongan->edit1($id);
		$this->load->view('edit-potongan1', $bagian);
	}

	public function edit2($id){
		$bagian['lembur'] = $this->Model_potongan->edit2($id);
		$this->load->view('edit-potongan2', $bagian);
	}

	public function edit3($id){
		$bagian['alpha'] = $this->Model_potongan->edit3($id);
		$this->load->view('edit-potongan3', $bagian);
	}

	public function edit4($id){
		$bagian['bpjs'] = $this->Model_potongan->edit4($id);
		$this->load->view('edit-potongan4', $bagian);
	}

	public function edit_proses($id){
		if($this->input->post('simpan')){
			$nama_potongan = $this->input->post('nama_potongan');
			$potongan = $this->input->post('potongan');

			$simpan = array(
				'nama_potongan' => $nama_potongan,
				'potongan' => $potongan
				);

			$edit_proses = $this->Model_potongan->edit_proses($simpan, $id);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Edit Data Potongan Berhasil !!!</div>");
			redirect('potongan');
			
		}
	}

	public function edit_proses1($id){
		if($this->input->post('simpan')){
			$potongan = $this->input->post('potongan');

			$simpan = array(
				'potongan' => $potongan
				);

			$edit_proses = $this->Model_potongan->edit_proses1($simpan, $id);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Edit Data Potongan Berhasil !!!</div>");
			redirect('potongan');
			
		}
	}

	public function edit_proses2($id){
		if($this->input->post('simpan')){
			$potongan_lembur = $this->input->post('potongan_lembur');

			$simpan = array(
				'potongan_lembur' => $potongan_lembur
				);

			$edit_proses = $this->Model_potongan->edit_proses2($simpan, $id);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Edit Data Potongan Berhasil !!!</div>");
			redirect('potongan');
			
		}
	}

	public function edit_proses3($id){
		if($this->input->post('simpan')){
			$potongan_alpha = $this->input->post('potongan_alpha');

			$simpan = array(
				'potongan_alpha' => $potongan_alpha
				);

			$edit_proses = $this->Model_potongan->edit_proses3($simpan, $id);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Edit Data Potongan Berhasil !!!</div>");
			redirect('potongan');
			
		}
	}

	public function edit_proses4($id){
		if($this->input->post('simpan')){
			$potongan_bpjs = $this->input->post('potongan_bpjs');

			$simpan = array(
				'potongan_bpjs' => $potongan_bpjs
				);

			$edit_proses = $this->Model_potongan->edit_proses4($simpan, $id);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Edit Data Potongan Berhasil !!!</div>");
			redirect('potongan');
			
		}
	}


	public function hapus($id){
		$this->Model_bagian->hapus($id);

		$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Hapus Data Bagian Berhasil !!!</div>");
		redirect('bagian');
	}

}
