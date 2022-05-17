<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Galeri_model');
        $this->load->model('User_model');
        is_logged_in();
    }

    function index()
    {
        $data['judul'] = "Data Portfolio";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['galeri'] = $this->Galeri_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("galeri/vw_galeri", $data);
        $this->load->view("layout/footer", $data);
    }

    function tambah()
    {
        $data['judul'] = "Tambah Data Portfolio";
        $data['userdata'] = $this->User_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama Project', 'required', [
            'required' => 'Nama Project Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis_desain', 'Jenis Desain', 'required', [
            'required' => 'Jenis Desain Wajib di isi'
        ]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Project', 'required', [
            'required' => 'Deskripsi Project Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("galeri/vw_tambah_galeri", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'jenis_desain' => $this->input->post('jenis_desain'),
                'deskripsi' => $this->input->post('deskripsi'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/galeri/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Galeri_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
                                                Galeri Berhasil Ditambah!</div>');
            redirect('Galeri');
        }
    }

    function edit($id)
    {
        $data['judul'] = "Edit Data Paket";
        $data['galeri'] = $this->Galeri_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama Project', 'required', [
            'required' => 'Nama Project Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis_desain', 'Jenis Desain', 'required', [
            'required' => 'Jenis Desain Wajib di isi'
        ]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Project', 'required', [
            'required' => 'Deskripsi Project Wajib di isi'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("galeri/vw_ubah_galeri", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'jenis_desain' => $this->input->post('jenis_desain'),
                'deskripsi' => $this->input->post('deskripsi'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/galeri/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $query = $this->db->set('gambar', $new_image);
                    if ($query) {
                        $old_image = $this->db->get_where('galeri', ['id' => $id])->row();
                        unlink(FCPATH . 'assets/images/galeri/' . $old_image->gambar);
                    }
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Galeri_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Galeri Berhasil Diubah!</div>');
            redirect('Galeri');
        }
    }

    public function hapus($id)
    {
        $this->Galeri_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon  fas fa-info-circle"></i>Data Galeri tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i  class="icon fas fa-check-circle"></i>Data Galeri Berhasil Dihapus!</div>');
        }
        redirect('Galeri');
    }
}
