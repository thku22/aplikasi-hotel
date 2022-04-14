<?php
class Register extends CI_Controller{
    function index(){
        $this->load->view('partisi/head') ;
        $this->load->view('partisi/navigasi1') ;
        $this->load->view('register') ;
        $this->load->view('partisi/footer') ;
        $this->load->view('partisi/modal') ;
        $this->load->view('partisi/js') ;
     }
     function proses_register(){
         $username         =$this->input->post('username');
         $password         =$this->input->post('password');
         $password         =md5($password);


         $data = array(
             'username'          =>$username,
             'password'          =>$password,
         );


         $this->db->insert('tbl_user',$data);
         redirect(base_url("Auth"));

     }
    }