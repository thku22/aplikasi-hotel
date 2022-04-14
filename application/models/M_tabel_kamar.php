<?php
    class M_tabel_kamar extends CI_Model{
        function kamar(){
            return $this->db->get('tbl_kamar');
        }
    }
?>