<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_gaji extends CI_Model {
		function detail_gaji($id){
			$hasil = $this->db->join('karyawan k','k.nik=g.nik')->where('id_gaji', $id)->get('gaji_karyawan g');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			} else {
				return array();
			}
		}

		function validasi($id){
			$validasi = array('status'=>'tervalidasi');
			$this->db->where('id_gaji', $id)->update('gaji_karyawan', $validasi);
		}

		function validasi_semua(){
			$bulan = $this->session->userdata('bulan_gaji');
			$validasi = array('status'=>'tervalidasi');
			$this->db->where('bulan', $bulan)->update('gaji_karyawan', $validasi);
		}

		function cetak($id){
			$hasil = $this->db->join('karyawan k','k.nik=g.nik')->where('id_gaji', $id)->get('gaji_karyawan g');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			} else {
				return array();
			}
		}
	}
?>