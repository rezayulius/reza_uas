<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Paket_model');
        $this->load->model('Project_model');
        $this->load->model('Pesanan_model');
        $this->load->model('Paket_model');
        $this->load->model('Galeri_model');
    }
    public function index()
    {
        $data['judul'] = "Profil";
        $data['userdata'] = $this->User_model->getBy();
        $data['user'] = $this->User_model->get();
        $data['project'] = $this->Project_model->tproject();
        $data['klien'] = $this->User_model->tklien();
        $data['pesanan'] = $this->Pesanan_model->tpesanan();
        $data['desainer'] = $this->User_model->tdesainer();
        $data['paket'] = $this->Paket_model->get();
        $data['galeri'] = $this->Galeri_model->get();
        $this->load->view('layout/home_header', $data);
        $this->load->view('home/vw_home', $data);
        $this->load->view('layout/home_footer', $data);
    }
    public function tambah()
    {
        is_logged_in3();
        $data['title'] = "Order";
        $data['judul'] = "Buat Pesanan";
        $data['paket'] = $this->Paket_model->get();
        $data['user'] = $this->User_model->getBy();
        $data['userdata'] = $this->User_model->getBy();

        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/home_header', $data);
            $this->load->view('home/vw_tambah_order', $data);
            $this->load->view('layout/home_footer', $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'id_paket' => $this->input->post('id_paket'),
                'alamat' => $this->input->post('alamat'),
                'kota' => $this->input->post('kota'),
                'no_hp' => $this->input->post('no_hp'),
                'pertanyaan1' => $this->input->post('pertanyaan1'),
                'pertanyaan2' => $this->input->post('pertanyaan2'),
                'pertanyaan3' => $this->input->post('pertanyaan3'),
                'pertanyaan4' => $this->input->post('pertanyaan4'),
                'no_pemesanan' => $this->input->post('no_pemesanan'),
                'id_user' => $this->input->post('id_user'),
                'tgl_pesan' => time(),
                'BPF-TI' => 'bpftiabcde'
            ];
            $this->Pesanan_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
                                                Paket Berhasil Ditambah!</div>');
            redirect('Home');
        }
    }

    public function profil()
    {
        $data['judul'] = "Profil";
        $data['title'] = "Profil";
        $data['userdata'] = $this->User_model->getBy();
        $data['user'] = $this->User_model->getBy();
        $this->load->view('layout/home_header', $data);
        $this->load->view('home/vw_profil', $data);
        $this->load->view('layout/home_footer', $data);
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
            redirect('Home/profil');
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
            redirect('Home/profil');
        }
    }
}
