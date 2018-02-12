<?php
    class Main_model extends CI_Model{
        public function getDataTentangRPL(){
            return $this->db->get('tentang_rpl')->row();
        }

        public function getDataBerita($limit = FALSE, $offset = FALSE, $where = FALSE){
			if($where){
				$this->db->where('id', $where);
			}
			if($limit){
				$this->db->limit($limit, $offset);
			}
			$this->db->order_by('berita.id', 'DESC');
			return $this->db->get('berita')->result_array();
		}
		
    }
