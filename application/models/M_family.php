<?php
    class M_family extends CI_Model{
        function family(){
            return $this->db->get('tbl_jenis_kamar');
        }
    }
?>