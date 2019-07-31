<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_bagian extends CI_Model {

		function lihat_bagian(){
			$proses = $this->db->get('bagian');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function simpan_proses($simpan){
			$this->db->insert('bagian', $simpan);
		}

		function edit($id){
			$proses = $this->db->where('id_bagian', $id)->limit(1)->get('bagian');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function edit_proses($simpan, $id){
			$this->db->where('id_bagian', $id)->update('bagian', $simpan);
		}


		function hapus($id){
			$this->db->where('id_bagian', $id)->delete('bagian');
		}

	}
?>