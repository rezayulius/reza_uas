<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        is_logged_in();
    }
    function index()
    {
        $data['judul'] = "Data User";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['userdata'] = $this->User_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("user/vw_user", $data);
        $this->load->view("layout/footer", $data);
    }

    function tambah()
    {
        $data['judul'] = "Tambah Data User";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Wajib di isi'
        ]);
        $this->form_validation->set_rules('kota', 'Kota', 'required', [
            'required' => 'Kota Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar!',
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_hp', 'NoHP', 'required|numeric', [
            'numeric' => 'No HP Harus Angka!',
            'required' => 'No HP Wajib di isi'
        ]);
        $this->form_validation->set_rules('role', 'Role', 'required', [
            'required' => 'Role Wajib di isi'
        ]);
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[5]|matches[password2]',
            [
                'matches' => 'Password Tidak Sama',
                'min_length' => 'Password Terlalu Pendek',
                'required' => 'Password harus diisi'
            ]
        );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah User';
            $this->load->view('layout/header', $data);
            $this->load->view('user/vw_tambah_user');
            $this->load->view('layout/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'kota' => htmlspecialchars($this->input->post('kota', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'gambar' => 'default.jpg',
                'role' => htmlspecialchars($this->input->post('role', true)),
                'date_created' => time()
            ];
            $this->userrole->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data User Berhasil Ditambahkan! </div>');
            redirect('user');
        }
    }


    public function hapus($id)
    {
        $this->User_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon  fas fa-info-circle"></i>Data User tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i  class="icon fas fa-check-circle"></i>Data User Berhasil Dihapus!</div>');
        }
        redirect('User');
    }


    function edit($id)
    {
        $data['menu'] = "Desainer";
        $data['judul'] = "Edit Data Desainer";
        $data['desainer'] = $this->Desainer_model->getById($id);
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
    public function update_status($id, $status)
    {
        $this->load->model('User_model', 'userdata');

        //send id and status to the model to update the status
        if ($this->userdata->update_status_model($id, $status)) {
            $this->session->set_flashdata('msg', 'User status has been updated successfully!');
            $this->session->set_flashdata('msg_class', 'alert-success');
        } else {
            $this->session->set_flashdata('msg', 'User status has not been updated successfully!');
            $this->session->set_flashdata('msg_class', 'alert-danger');
        }
        return redirect('user');
    }

    public function update_role($id)
    {
        $data = [
            'role' => $this->input->post('role'),
        ];
        $id = $this->input->post('id');
        $this->User_model->update(['id' => $id], $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role User Berhasil Diubah!</div>');
        redirect('User');
    }
}
