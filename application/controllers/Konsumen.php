<?php
class Konsumen extends CI_Controller{
    function index(){
        $this->load->view('partisi/head') ;
        $this->load->view('partisi/navigasi') ;
        $this->load->view('partisi/checkin') ;
        $this->load->view('partisi/footer') ;
        $this->load->view('partisi/modal') ;
        $this->load->view('partisi/js') ;
     }
     function proses_konsumen(){
         $nama_depan             =$this->input->post('nama_depan');
         $nama_tengah            =$this->input->post('nama_tengah');
         $nama_belakang          =$this->input->post('nama_belakang');
         $alamat                 =$this->input->post('kota');
         $provinsi               =$this->input->post('alamat');
         $kota                   =$this->input->post('provinsi');
         $negara                 =$this->input->post('negara');
         $no_identitas           =$this->input->post('no_identitas');
         $no_tlp                 =$this->input->post('no_tlp');
         $email                  =$this->input->post('email');


         $data = array(
             'nama_depan'          =>$nama_depan,
             'nama_tengah'         =>$nama_tengah,
             'nama_belakang'       =>$nama_belakang,
             'alamat'              =>$alamat,
             'kota'                =>$kota,
             'provinsi'            =>$provinsi,
             'negara'              =>$negara,
             'no_identitas'        =>$no_identitas,
             'no_tlp'              =>$no_tlp,
             'email'               =>$email,
         );


         $this->db->insert('tbl_konsumen',$data);
         redirect(base_url("auth1"));

     }
     function simpan_pesan_kamar()
     {
         sleep(2);

         $this->am->simpan_pesan_kamar();
         redirect(base_url("auth1"));
     }
    
}