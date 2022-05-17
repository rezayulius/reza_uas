<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Desainer extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        is_logged_in();
    }
    function index()
    {
        $data['judul'] = "Data Desainer";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['desainer'] = $this->User_model->getDesainer();
        $this->load->view("layout/header", $data);
        $this->load->view("desainer/vw_desainer", $data);
        $this->load->view("layout/footer", $data);
    }
    
    function tambah()
    {
        $data['menu'] = "Desainer";
        $data['judul'] = "Tambah Data Desainer";
        
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama Desainer', 'required', [
            'required' => 'Nama Desainer Wajib di isi'
        ]);
        $this->form_validation->set_rules('bidang_keahlian', 'Bidang Keahlian', 'required', [
            'required' => 'Bidang Keahlian Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => 'Email Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("desainer/vw_tambah_desainer", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'bidang_keahlian' => $this->input->post('bidang_keahlian'),
                'email' => $this->input->post('email'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/desainer/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Desainer_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
                                                Desainer Berhasil Ditambah!</div>');
            redirect('Desainer');
        }
    }


    public function hapus($id)
    {
        $this->Desainer_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon  fas fa-info-circle"></i>Data Desainer tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i  class="icon fas fa-check-circle"></i>Data Desainer Berhasil Dihapus!</div>');
        }
        redirect('Desainer');
    }


    function edit($id)
    {
        $data['judul'] = "Edit Data Desainer";
        $data['desainer'] = $this->User_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama Desainer', 'required', [
            'required' => 'Nama Desainer Wajib di isi'
        ]);
        $this->form_validation->set_rules('bidang_keahlian', 'Bidang Keahlian', 'required', [
            'required' => 'Bidang Keahlian Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => 'Email Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("desainer/vw_ubah_desainer", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'bidang_keahlian' => $this->input->post('bidang_keahlian'),
                'email' => $this->input->post('email'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/desainer/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $query = $this->db->set('gambar', $new_image);
                    if ($query) {
                        $old_image = $this->db->get_where('desainer', ['id' => $id])->row();
                        unlink(FCPATH . 'assets/images/desainer/' . $old_image->gambar);
                    }
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Desainer_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Desainer Berhasil DiUbah!</div>');
            redirect('Desainer');
        }
    }
}
