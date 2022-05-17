<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Paket_model');
        is_logged_in();
    }
    function index()
    {
        $data['judul'] = "Data Paket";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['paket'] = $this->Paket_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("paket/vw_paket", $data);
        $this->load->view("layout/footer", $data);
    }

    function tambah()
    {
        $data['judul'] = "Tambah Data Paket";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('jenis', 'Jenis Paket', 'required', [
            'required' => 'Jenis Paket Wajib di isi'
        ]);
        $this->form_validation->set_rules('nama', 'Nama Paket', 'required', [
            'required' => 'Nama Paket Wajib di isi'
        ]);
        $this->form_validation->set_rules('harga', 'Harga Paket', 'required|numeric', [
            'required' => 'Harga Wajib di isi',
            'numeric' => 'Harga Wajib Angka'
        ]);
        $this->form_validation->set_rules('deskripsi1', 'Deskripsi Paket', 'required', [
            'required' => 'Deskripsi Paket Wajib di isi'
        ]);
        $this->form_validation->set_rules('deskripsi2', 'Deskripsi Paket', 'required', [
            'required' => 'Deskripsi Paket Wajib di isi'
        ]);
        $this->form_validation->set_rules('deskripsi3', 'Deskripsi Paket', 'required', [
            'required' => 'Deskripsi Paket Wajib di isi'
        ]);
        $this->form_validation->set_rules('deskripsi4', 'Deskripsi Paket', 'required', [
            'required' => 'Deskripsi Paket Wajib di isi'
        ]);
        $this->form_validation->set_rules('deskripsi5', 'Deskripsi Paket', 'required', [
            'required' => 'Deskripsi Paket Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("paket/vw_tambah_paket", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'jenis' => $this->input->post('jenis'),
                'nama' => $this->input->post('nama'),
                'harga' => $this->input->post('harga'),
                'deskripsi1' => $this->input->post('deskripsi1'),
                'deskripsi2' => $this->input->post('deskripsi2'),
                'deskripsi3' => $this->input->post('deskripsi3'),
                'deskripsi4' => $this->input->post('deskripsi4'),
                'deskripsi5' => $this->input->post('deskripsi5'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/paket/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Paket_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
                                                Paket Berhasil Ditambah!</div>');
            redirect('Paket');
        }
    }
    public function hapus($id)
    {
        $this->Paket_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon  fas fa-info-circle"></i>Data Paket tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i  class="icon fas fa-check-circle"></i>Data Paket Berhasil Dihapus!</div>');
        }
        redirect('Paket');
    }

    function edit($id)
    {
        $data['judul'] = "Edit Data Paket";
        $data['paket'] = $this->Paket_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('jenis', 'Jenis Paket', 'required', [
            'required' => 'Jenis Paket Wajib di isi'
        ]);
        $this->form_validation->set_rules('nama', 'Nama Paket', 'required', [
            'required' => 'Nama Paket Wajib di isi'
        ]);
        $this->form_validation->set_rules('harga', 'Harga Paket', 'required|numeric', [
            'required' => 'Harga Wajib di isi',
            'numeric' => 'Harga Wajib Angka'
        ]);
        $this->form_validation->set_rules('deskripsi1', 'Deskripsi Paket', 'required', [
            'required' => 'Deskripsi Paket Wajib di isi'
        ]);
        $this->form_validation->set_rules('deskripsi2', 'Deskripsi Paket', 'required', [
            'required' => 'Deskripsi Paket Wajib di isi'
        ]);
        $this->form_validation->set_rules('deskripsi3', 'Deskripsi Paket', 'required', [
            'required' => 'Deskripsi Paket Wajib di isi'
        ]);
        $this->form_validation->set_rules('deskripsi4', 'Deskripsi Paket', 'required', [
            'required' => 'Deskripsi Paket Wajib di isi'
        ]);
        $this->form_validation->set_rules('deskripsi5', 'Deskripsi Paket', 'required', [
            'required' => 'Deskripsi Paket Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("paket/vw_ubah_paket", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'jenis' => $this->input->post('jenis'),
                'nama' => $this->input->post('nama'),
                'harga' => $this->input->post('harga'),
                'deskripsi1' => $this->input->post('deskripsi1'),
                'deskripsi2' => $this->input->post('deskripsi2'),
                'deskripsi3' => $this->input->post('deskripsi3'),
                'deskripsi4' => $this->input->post('deskripsi4'),
                'deskripsi5' => $this->input->post('deskripsi5'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/paket/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $query = $this->db->set('gambar', $new_image);
                    if ($query) {
                        $old_image = $this->db->get_where('paket', ['id' => $id])->row();
                        unlink(FCPATH . 'assets/images/paket/' . $old_image->gambar);
                    }
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Paket_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Paket Berhasil Diubah!</div>');
            redirect('Paket');
        }
    }
}
