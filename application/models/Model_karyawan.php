<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_karyawan extends CI_Model {

		function lihat_karyawan(){
			$proses = $this->db->order_by('id_karyawan','DESC')->get('karyawan');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function simpan_proses($simpan_karyawan, $simpan_users){
			$this->db->insert('karyawan', $simpan_karyawan);
			$this->db->insert('users', $simpan_users);
		}

		function edit($nik){
			$proses = $this->db->where('nik', $nik)->limit(1)->get('karyawan');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function edit_proses($simpan, $nik){
			$this->db->where('nik', $nik)->update('karyawan', $simpan);
		}

		function edit_password_proses($simpan, $nik){
			$this->db->where('nik', $nik)->update('users', $simpan);
		}


		function hapus($nik){
			$this->db->where('nik', $nik)->delete('karyawan');
			$this->db->where('nik', $nik)->delete('users');
		}

		function cek_pass($pass_lama, $nik){

			$cek = $this->db->where('nik', $nik)->like('password', md5($pass_lama))->limit(1)->get('users');
			if($cek->num_rows() > 0){
				return $cek->row();
			} else {
				return array();
			}
		}

	}
?>