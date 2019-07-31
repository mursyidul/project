<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_absensi extends CI_Model {

		function lihat_absen(){
			$proses = $this->db->join('karyawan k','k.nik=g.nik')->get('gaji_karyawan g');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function cek_absen(){
			$bulan = $this->session->userdata('bulan');
			$proses = $this->db->join('karyawan k','k.nik=g.nik')->like('bulan', $bulan)->get('gaji_karyawan g');

			// if($proses->num_rows() > 0){
			// 	return $proses->row();
			// } else{
			// 	return array();
			// }
		}

		function simpan_proses($simpan){
			$this->db->insert('gaji_karyawan', $simpan);
		}

		function edit($nik){
			$bulan = $this->session->userdata('bulan');
			$proses = $this->db->join('karyawan k','k.nik=g.nik')->where('g.nik', $nik)->where('g.bulan',$bulan)->get('gaji_karyawan g');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else {
				return array();
			}
		}

		function edit_proses($simpan, $nik){
			$bulan = $this->session->userdata('bulan');
			$this->db->where('nik', $nik)->where('bulan', $bulan)->update('gaji_karyawan', $simpan);
		}

		function hapus($nik){
			$bulan = $this->session->userdata('bulan');
			$this->db->where('nik', $nik)->where('bulan',$bulan)->delete('gaji_karyawan');
		}

	}
?>