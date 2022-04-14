<?php
 class Pesan extends CI_Controller{
    function index(){
        $this->load->view('partisi/head') ;
        $this->load->view('partisi/navigasi') ;
        $this->load->view('standard/pesan1') ;
        $this->load->view('checkin') ;
        $this->load->view('partisi/footer') ;
        $this->load->view('partisi/modal') ;
        $this->load->view('partisi/js') ;
    }
}