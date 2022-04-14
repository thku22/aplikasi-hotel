<?php
 class Auth extends CI_Controller{
    function index(){
        $this->load->view('partisi/head') ;
        $this->load->view('partisi/navigasi1') ;
        $this->load->view('login') ;
        $this->load->view('partisi/footer') ;
        $this->load->view('partisi/modal') ;
        $this->load->view('partisi/js') ;
     }
    function ganti_password(){
        $this->load->view('partisi/head') ;
        $this->load->view('partisi/navigasi1') ;
        $this->load->view('ganti_password') ;
        $this->load->view('partisi/footer') ;
        $this->load->view('partisi/modal') ;
        $this->load->view('partisi/js') ;
     }
     function proses_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password = md5($password);
        $cek_login = $this->db->get_where('tbl_user',
       array('username' => $username, 'password' => $password))->row_array();
       
        if($cek_login > 0){
       
        $data_session = array(
        'username' => $username,
        'status' => "login",
        'hak_akses' => $cek_login['hak_akses'],
       
        );
       
        $this->session->set_userdata($data_session);
        print_r($data_session);
        if ($data_session['hak_akses'] == 'client'){
        redirect(base_url("index.php/Auth1"));
        }
        else{
        redirect(base_url("index.php/hotel"));
        }
        }else{
        echo "Username Atau password salah !";
        redirect(base_url("index.php/auth"));
        }  
    }
    function proses_ganti_password(){
        $username = $this->input->post('username'); 
        $password1 = $this->input->post('password1'); 
        $password2 = $this->input->post('password2'); 
        
        if ($password1 == $password2) {
        $password1 = MD5($password1);
        $data = array(
        'password' => $password1
        );
        $where = array(
        'username' => $username
        );
        
        $this->db->where($where);
        $this->db->update('tbl_user', $data);
        redirect(base_url("index.php/auth"));
        
        }else{
        echo "Password tidak sama";
        redirect(base_url("index.php/auth/ganti_password"));
        }
    }

    
}

?>