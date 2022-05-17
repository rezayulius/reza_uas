<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pesanan_model');
        $this->load->model('Paket_model');
        $this->load->model('User_model');
    }
    function index()
    {
        $data['judul'] = "Data Pesanan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pesanan'] = $this->Pesanan_model->get();
        $data['paket'] = $this->Paket_model->get();
        $data['userdata'] = $this->User_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("pesanan/vw_pesanan", $data);
        $this->load->view("layout/footer", $data);
    }

    public function hapus($id)
    {
        $this->Pesanan_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon  fas fa-info-circle"></i>Data Pesanan tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i  class="icon fas fa-check-circle"></i>Data Pesanan Berhasil Dihapus!</div>');
        }
        redirect('Pesanan');
    }
}
