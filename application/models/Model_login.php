<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_login extends CI_Model {
		function cek_user(){
			$username = set_value('username');
			$password = set_value('password');

			$proses = $this->db->where('username', $username)->where('password', md5($password))->limit(1)->get('users');

			if($proses->num_rows() > 0){
				return $proses->row();
			} else{
				return array();
			}
		}

		function ganti_password(){
			$id = $this->session->userdata('id_users');
			$hasil = $this->db->where('id_users', $id)->limit(1)->get('users');

			if($hasil->num_rows() > 0){
				return $hasil->result();
			} else {
				return array();
			}
		}
	}
?>