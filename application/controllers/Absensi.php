<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_absensi');
	}

	public function index(){
		$absensi['absensi'] = $this->Model_absensi->lihat_absen();
		$this->load->view('absensi', $absensi);
	}

	public function tambah(){
		$this->load->view('tambah-absensi');
	}

	public function cek(){
		// $bulan = $this->input->post('bulan');
		$bulan = $this->session->userdata('bulan');
		if($this->session->userdata('bagian') == 'karyawan'){
			$nik = $this->session->userdata('nik');
			$absensi = $this->db->join('karyawan k','k.nik=g.nik')->where('bulan', $bulan)->where('g.nik',$nik)->get('gaji_karyawan g');	
		} else {
			$absensi = $this->db->join('karyawan k','k.nik=g.nik')->where('bulan', $bulan)->get('gaji_karyawan g');			
		}

		// $absensi = $this->Model_absensi->cek_absen();

		if($absensi == FALSE){
			echo "TIDAK ADA DATA";
		} else {
			// echo "<table id='myTable' class='table table-hover'>";
			echo "<thead>";
				echo "<tr>";
					echo "<th>No</th>";
					echo "<th>NIK</th>";
					echo "<th>Nama</th>";
					echo "<th>Bagian</th>";
					echo "<th>Bulan</th>";
					echo "<th>Lembur</th>";
					echo "<th>Alpha</th>";
					if($this->session->userdata('bagian') == 'hrd'){
					echo "<th>Aksi</th>";
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
					echo "<td>".$value->bagian."</td>";
					echo "<td>".$value->bulan."</td>";
					echo "<td>".$value->lembur."</td>";
					echo "<td>".$value->alpha."</td>";
					if($this->session->userdata('bagian') == 'hrd'){
						if($value->status == 'tervalidasi'){
							echo "<td>GAJI TERVALIDASI</td>";
						} else {
							echo "<td><div id='thanks'>";

							echo anchor('absensi/edit/'.$value->nik,"<span class='glyphicon glyphicon-edit'></span>",['class'=>'btn btn-sm btn-primary tooltips','data-placement'=>'bottom','data-toggle'=>'tooltip', 'title'=>'Edit Absensi']);
							echo "&nbsp;";
							echo anchor('absensi/hapus/'.$value->nik,"<span class='glyphicon glyphicon-trash'></span>",['class'=>'btn btn-sm btn-danger tooltips','onclick'=>"return confirm ('Yakin ingin hapus $value->nik?')", 'data-toggle'=>'tooltip','title'=>'Hapus Absensi', 'data-placement'=>'bottom']);
							echo "</div></td>";
						}
					
					}

				echo "</tr>";
				}
			echo "</tbody>";
			// echo "</table>";
		}
	}


	public function tes(){
		$bulan = $this->input->post('bulan');

		$this->session->set_userdata('bulan', $bulan);

		redirect('absensi/cek');
	}

	// public function cek(){
	// 	$absensi['absensi'] = $this->Model_absensi->cek_absen($this->session->userdata('bulan'));

	// 	$this->load->view('lihat-absen', $absensi);
	// }

	public function tambah_proses(){
		if($this->input->post('simpan')){
			$nik = $this->input->post('nik');
			$bagian = $this->input->post('bagian');
			$bulan = $this->input->post('bulan');
			$lembur = $this->input->post('lembur');
			//$makan = $this->input->post('makan');
			$alpha = $this->input->post('alpha');
			

			$cek_gaji_pokok = $this->db->join('makan m','m.id_makan=b.id_bagian')->join('lembur l','l.id_lembur=b.id_bagian')->join('alpha a','a.id_alpha=b.id_bagian')->join('bpjs p','p.id_bpjs=b.id_bagian')->where('bagian', $bagian)->limit(1)->get('bagian b');

			foreach ($cek_gaji_pokok->result() as $key => $value) {
				$gaji = $value->gaji;
				$makan1 = $value->potongan;
				$bpjs = $value->potongan_bpjs;
				$lembur1 = $value->potongan_lembur;
				$alpha1 = $value->potongan_alpha;
				$makan = $makan1 * (20 - $alpha) ;
				$hit_gaji = $gaji + (($lembur * $lembur1) + ($makan) - ($bpjs) - ($alpha * $alpha1));
			}
			

			$simpan = array(
				'nik' => $nik,
				'bulan' => $bulan,
				'makan' => $makan,
				'alpha' => $alpha,
				'lembur' => $lembur,
				'total_gaji' => $hit_gaji
				);

			$simpan_proses = $this->Model_absensi->simpan_proses($simpan);
			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Tambah Data Absensi Berhasil !!!</div>");
			redirect('absensi');

		}
	}

	public function edit($nik){
		$absensi['absensi'] = $this->Model_absensi->edit($nik);
		$this->load->view('edit-absensi', $absensi);
	}

	public function edit_proses($nik){
		if($this->input->post('simpan')){
			$nik = $this->input->post('nik');
			$bagian = $this->input->post('bagian');
			$bulan = $this->input->post('bulan');
			$lembur = $this->input->post('lembur');
			$alpha = $this->input->post('alpha');

			$cek_gaji_pokok = $this->db->join('makan m','m.id_makan=b.id_bagian')->join('lembur l','l.id_lembur=b.id_bagian')->join('alpha a','a.id_alpha=b.id_bagian')->join('bpjs p','p.id_bpjs=b.id_bagian')->where('bagian', $bagian)->limit(1)->get('bagian b');

			foreach ($cek_gaji_pokok->result() as $key => $value) {
				$gaji = $value->gaji;
				$makan1 = $value->potongan;
				$bpjs = $value->potongan_bpjs;
				$lembur1 = $value->potongan_lembur;
				$alpha1 = $value->potongan_alpha;
				$makan = $makan1 * (20 - $alpha) ;
				$hit_gaji = $gaji + (($lembur * $lembur1) + ($makan) - ($bpjs) - ($alpha * $alpha1));
			}

			$simpan = array(
				'nik' => $nik,
				'bulan' => $bulan,
				'alpha' => $alpha,
				'lembur' => $lembur,
				'total_gaji' => $hit_gaji
				);

			$simpan_proses = $this->Model_absensi->edit_proses($simpan, $nik);
			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Edit Data Absensi Berhasil !!!</div>");
			redirect('absensi');

		}
	}

	public function hapus($nik){
		$this->Model_absensi->hapus($nik);
		$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Hapus Data Absensi Berhasil !!!</div>");
		redirect('absensi');
	}

	public function cari_karyawan(){
		$keyword = $this->uri->segment(3);

		$data = $this->db->from('karyawan')->like('nik',$keyword)->get();	

		foreach($data->result() as $row){
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
				'value'	=>$row->nik,
				'nama' => $row->nama,
				'alamat' => $row->alamat,
				'bagian' => $row->bagian
			);
		}
		echo json_encode($arr);
	}

}
