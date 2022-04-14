<?php
    class Hotel extends CI_Controller{

       function __cunstruct()
       {
           parent ::__construsct();
         

       }
      public function index()
      {
        $this->load->view('partisi_back/head');
        $this->load->view('partisi_back/navigasi');
        $this->load->view('v_hotel');
        $this->load->view('partisi_back/footer');
        $this->load->view('partisi_back/js');
      }
      public function dashboard()
      {
        $this->load->view('partisi_back/head');
        $this->load->view('partisi_back/navigasi');
        $this->load->view('v_hotel');
        $this->load->view('partisi_back/footer');
        $this->load->view('partisi_back/js');
      }

      public function tampil_konsumen(){
        $this->load->model('M_konsumen');
            $data['konsumen'] = $this->M_konsumen->konsumen()->result();

            $this->load->view('partisi_back/head');
            $this->load->view('partisi_back/navigasi');
            $this->load->view('v_konsumen', $data);
            //$this->load->view('partisi/footer');
            $this->load->view('partisi_back/js');
        }
        public function hapus_konsumen($id_konsumen){
            $id_konsumen = $id_konsumen;
            $this->db->delete('tbl_konsumen',['id_konsumen'=> $id_konsumen]);
            redirect('Hotel/tampil_konsumen');
        }
        
    public function tampil_kamar(){
        $this->load->model('M_tabel_kamar');
        $data['kamar'] = $this->M_tabel_kamar->kamar()->result();

        $this->load->view('partisi_back/head');
        $this->load->view('partisi_back/navigasi');
        $this->load->view('v_tabel_kamar', $data);
        //$this->load->view('partisi/footer');
        $this->load->view('partisi_back/js');
    } 
    public function user(){
        $this->load->model('M_user');
        $data['user'] = $this->M_user->user()->result();

        $this->load->view('partisi_back/head');
        $this->load->view('partisi_back/navigasi');
        $this->load->view('v_user', $data);
        //$this->load->view('partisi/footer');
        $this->load->view('partisi_back/js');
    } 
    
    public function delux(){
        $this->load->model('M_deluxx');
        $data['delux'] = $this->M_deluxx->delux()->result();

        $this->load->view('partisi_back/head');
        $this->load->view('partisi_back/navigasi');
        $this->load->view('v_delux', $data);
        //$this->load->view('partisi/footer');
        $this->load->view('partisi_back/js');
    } 
    public function family(){
        $this->load->model('M_family');
        $data['family'] = $this->M_family->family()->result();

        $this->load->view('partisi_back/head');
        $this->load->view('partisi_back/navigasi');
        $this->load->view('v_family', $data);   
        //$this->load->view('partisi/footer');
        $this->load->view('partisi_back/js');
    } 
    
    function tambah_kamar(){
        $this->load->view('form_tambah_kamar');
    }
    function tambah_jeniskamar(){
        $this->load->view('v_tambah_jeniskamar');
    }
    
    function simpan_jeniskamar()   
    {
        $this->M_deluxx->simpan_data();
        redirect('Hotel');

    }
    
    function upload_foto()
    {
        $config['upload_path']          = './foto/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto'))
        {
            echo "Gagal Tambah";
            
        }
        else
        {
           $foto = $this->upload->data();
           $file_name = $foto['file_name'];
           $id_jenis = $this->input->post('id_jenis', TRUE);
           $jenis_kamar = $this->input->post('jenis_kamar', TRUE);
           $keterangan = $this->input->post('keterangan', TRUE);
           $harga = $this->input->post('harga', TRUE);
           $foto = $this->input->post('foto', TRUE);

           $data = array(
               'jenis_kamar' => $jenis_kamar,
               'keterangan' => $keterangan,
               'harga' => $harga,
               'foto' => $file_name,
           );
           
           $this->db->insert('tbl_jenis_kamar', $data);
           $this->session->set_flashdata('data', '<div class="alert alert-info" role="alert">
           data berhasil ditambahkan!
         </div>');

             redirect('Hotel/delux');
        }
       
       
    }
    function hapus_jeniskamar($id_jenis){
        $id_jenis =$id_jenis;
        $this->db->delete('tbl_jenis_kamar',['id_jenis' => $id_jenis]);
        redirect('Hotel/delux');
     }
    }
?>