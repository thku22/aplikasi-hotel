<?php 
    class Auth1 extends CI_Controller{
        function index(){
            $this->load->view('partisi/head') ;
            $this->load->view('partisi/navigasi') ;
          //  $this->load->view('partisi/header') ;
            $this->load->view('Home_v') ;
           // $this->load->view('partisi/about') ;
           // $this->load->view('partisi/checkout') ;
            //$this->load->view('partisi/footer') ;
            $this->load->view('partisi/modal1') ;
            $this->load->view('partisi/js') ;
           
        }
       
        function checkout(){
            $this->load->view('partisi/head') ;
            $this->load->view('partisi/navigasi') ;
            //$this->load->view('partisi/header') ;
            //$this->load->view('profile_v') ;
            //$this->load->view('partisi/about') ;
            $this->load->view('partisi/checkout') ;
           //$this->load->view('partisi/footer') ;
            //$this->load->view('partisi/modal') ;
            //$this->load->view('partisi/js') ;
           
        }
        function login(){
            $this->load->view('partisi/head') ;
            $this->load->view('partisi/navigasi') ;
            //$this->load->view('partisi/header') ;
            $this->load->view('login_v') ;
            //$this->load->view('partisi/about') ;
           // $this->load->view('partisi/checkout') ;
           $this->load->view('partisi/footer') ;
            //$this->load->view('partisi/modal') ;
            //$this->load->view('partisi/js') ;
           
        }
    }
?>