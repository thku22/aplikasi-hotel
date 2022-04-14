<?php
    class M_deluxx extends CI_Model{
        function delux(){
            return $this->db->get('tbl_jenis_kamar');
        }
        
     function simpan_data()
     {
         $jenis_kamar = $this->input->post('jenis_kamar');
         $keterangan = $this->input->post('keterangan');
         $harga = $this->input->post('harga');
         $foto = $this->input->post('foto');
        

         $data = array(
             'jenis_kamar'=>$jenis_kamar,
             'keterangan'=>$keterangan,
             'harga'=>$harga,
             'foto'=>$foto,
         );

         $this->db->insert('tbl_jenis_kamar',$data);
    }
    
}
?>