<?php
    class M_konsumen extends CI_Model{
        function konsumen(){
            return $this->db->get('tbl_konsumen');
        }
    }
?>