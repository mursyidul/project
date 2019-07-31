<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_potongan extends CI_Model {

		function lihat_bagian(){
			$proses = $this->db->get('potongan');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function lihat_makan(){
			$proses = $this->db->get('makan');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function lihat_lembur(){
			$proses = $this->db->get('lembur');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function lihat_alpha(){
			$proses = $this->db->get('alpha');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function lihat_bpjs(){
			$proses = $this->db->get('bpjs');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}


		function simpan_proses($simpan){
			$this->db->insert('potongan', $simpan);
		}

		function simpan_proses1($simpan){
			$this->db->insert('makan', $simpan);
		}

		function simpan_proses2($simpan){
			$this->db->insert('lembur', $simpan);
		}

		function simpan_proses3($simpan){
			$this->db->insert('alpha', $simpan);
		}

		function simpan_proses4($simpan){
			$this->db->insert('bpjs', $simpan);
		}

		function edit($id){
			$proses = $this->db->where('id_potongan', $id)->limit(1)->get('potongan');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function edit1($id){
			$proses = $this->db->where('id_makan', $id)->limit(1)->get('makan');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function edit2($id){
			$proses = $this->db->where('id_lembur', $id)->limit(1)->get('lembur');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function edit3($id){
			$proses = $this->db->where('id_alpha', $id)->limit(1)->get('alpha');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function edit4($id){
			$proses = $this->db->where('id_bpjs', $id)->limit(1)->get('bpjs');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function edit_proses($simpan, $id){
			$this->db->where('id_potongan', $id)->update('potongan', $simpan);
		}

		function edit_proses1($simpan, $id){
			$this->db->where('id_makan', $id)->update('makan', $simpan);
		}

		function edit_proses2($simpan, $id){
			$this->db->where('id_lembur', $id)->update('lembur', $simpan);
		}

		function edit_proses3($simpan, $id){
			$this->db->where('id_alpha', $id)->update('alpha', $simpan);
		}

		function edit_proses4($simpan, $id){
			$this->db->where('id_bpjs', $id)->update('bpjs', $simpan);
		}


		function hapus($id){
			$this->db->where('id_potongan', $id)->delete('potongan');
		}

	}
?>