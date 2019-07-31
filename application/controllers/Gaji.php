<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_gaji');
	}

	public function index(){
		$this->load->view('gaji');
	}

	public function cek(){
		// $bulan = $this->input->post('bulan');
		$bulan = $this->session->userdata('bulan_gaji');

		if($this->session->userdata('bagian') == 'karyawan'){
			$nik = $this->session->userdata('nik');
			$absensi = $this->db->join('karyawan k','k.nik=g.nik')->where('bulan', $bulan)->where('k.nik',$nik)->get('gaji_karyawan g');
		} else {
			$absensi = $this->db->join('karyawan k','k.nik=g.nik')->where('bulan', $bulan)->get('gaji_karyawan g');
		}



		// $absensi = $this->Model_absensi->cek_absen();

		if($absensi == FALSE){
			echo "<tr><td>";
			echo "TIDAK ADA DATA";
			echo "</td></tr>";
		} else {
			echo "<thead>";
				echo "<tr>";
					echo "<th>No</th>";
					echo "<th>NIK</th>";
					echo "<th>Nama</th>";
					echo "<th>Bulan</th>";
					echo "<th>Bagian</th>";
					echo "<th>Gaji</th>";
					if($this->session->userdata('bagian') != 'hrd' && $this->session->userdata('bagian') == 'direktur'){
						echo "<th>Aksi</th>";
					} else if($this->session->userdata('bagian') != 'direktur' && $this->session->userdata('bagian') == 'hrd') {
						echo "<th>Status</th>";
						echo "<th>Aksi</th>";
					} else if($this->session->userdata('bagian') == 'karyawan'){
						echo "<th>Status</th>";
					}
				echo "</tr>";
			echo "</thead>";
			echo "<tbody>";
				$a=0;
				foreach ($absensi->result() as $key => $value) {
					$a++;
				echo "<tr>";
					echo "<td>".$a."</td>";
					echo "<td>".$value->nik."</td>";
					echo "<td>".$value->nama."</td>";
					echo "<td>".$value->bulan."</td>";
					echo "<td>".$value->bagian."</td>";
					echo "<td>Rp. ".number_format($value->total_gaji, 0, '','.')."</td>";
					if($this->session->userdata('bagian') != 'hrd' && $this->session->userdata('bagian') == 'direktur'){
						if($value->status == 'tervalidasi'){
							echo "<td>TERVALIDASI</td>";
						} else {
							echo "<td><div id='thanks'>";

							echo anchor('gaji/detail/'.$value->id_gaji,"<span class='glyphicon glyphicon-info-sign'></span>",['class'=>'btn btn-sm btn-primary tooltips','data-placement'=>'bottom','data-toggle'=>'tooltip', 'title'=>'Detail Gaji']);

							echo "&nbsp;";

							echo anchor('gaji/validasi/'.$value->id_gaji,"<span class='glyphicon glyphicon-check'></span>",['class'=>'btn btn-sm btn-success tooltips','data-placement'=>'bottom','data-toggle'=>'tooltip', 'title'=>'Validasi Gaji']);

							echo "</div></td>";
						}
					} else {
						if($value->status == 'tervalidasi'){
							echo "<td>TERVALIDASI</td>";
							if($this->session->userdata('bagian') == 'hrd'){
							echo "<td>".anchor('gaji/cetak/'.$value->id_gaji,"<span class='fa fa-print'></span Cetak",['class'=>'btn btn-sm btn-info tooltips','data-placement'=>'bottom','data-toggle'=>'tooltip','title'=>'Cetak Struk Gaji'])."</td>";
						}
						} else {
							echo "<td>BELUM TERVALIDASI</td>";
						}
					}
				echo "</tr>";
				}
			echo "</tbody>";
		}
	}


	public function tes(){
		$bulan = $this->input->post('bulan');
		$this->session->set_userdata('bulan_gaji', $bulan);
		redirect('gaji/cek');
	}

	public function detail($id){
		$detail['detail'] = $this->Model_gaji->detail_gaji($id);
		$this->load->view('detail-gaji', $detail);
	}

	public function validasi($id){
		$this->Model_gaji->validasi($id);

		$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Gaji Berhasil Tervalidasi!!!</div>");
		redirect('gaji');
	}

	public function validasi_semua(){
		$this->Model_gaji->validasi_semua();
		$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Semua Gaji Berhasil Tervalidasi!!!</div>");
		redirect('gaji');
	}

	public function cetak($id){
		$cetak['cetak'] = $this->Model_gaji->cetak($id);
		$this->load->view('cetak', $cetak);
	}

}
