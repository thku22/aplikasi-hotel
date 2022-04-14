<?php
    class M_user extends CI_Model{
        function user(){
            return $this->db->get('tbl_user');

            function simpan_data()
     {
         $username = $this->input->post('username');
         $password = $this->input->post('password');
         $hak_akses = $this->input->post('hak_akses');
         $aktivasi = $this->input->post('aktivasi');
         $no_hp = $this->input->post('no_hp');
        

         $data = array(
             'username'=>$username,
             'password'=>$password,
             'hak_akses'=>$hak_akses,
             'aktivasi'=>$aktivasi,
             'no_hp'=>$no_hp,
         );

         $this->db->insert('tbl_jenis_kamar',$data);
        }
    }
}
?>