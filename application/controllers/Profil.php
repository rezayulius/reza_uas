<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        is_logged_in();
    }
    public function index()
    {
        $data['judul'] = "Profil";
        $data['user'] = $this->User_model->getBy();
        $this->load->view('layout/header', $data);
        $this->load->view('profil/vw_profil', $data);
        $this->load->view('layout/footer', $data);
    }
    function edit($id)
    {
        $data['judul'] = "Profil";
        $data['userdata'] = $this->User_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim', [
            'required' => 'Jenis Kelamin Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Alamat Wajib di isi'
        ]);
        $this->form_validation->set_rules('kota', 'Kota', 'required|trim', [
            'required' => 'Kota Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|trim', [
            'required' => 'Nomor HP Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data User Gagal Diubah!</div>');
            redirect('Profil');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'kota' => htmlspecialchars($this->input->post('kota', true)),
                'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
                'id' => $this->input->post('id'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/profile/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $query = $this->db->set('gambar', $new_image);
                    if ($query) {
                        $old_image = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                        unlink(FCPATH . 'assets/images/profile/' . $old_image->gambar);
                    }
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->User_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data User Berhasil Diubah!</div>');
            redirect('Profil');
        }
    }
}
