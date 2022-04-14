<?php
    class M_family extends CI_Model{
        function standard(){
            return $this->db->get('tbl_jenis_kamar');
        }
    }
?>