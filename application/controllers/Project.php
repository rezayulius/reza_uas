<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Project_model');
        $this->load->model('Pesanan_model');
        $this->load->model('Paket_model');
        $this->load->model('User_model');
    }
    function index()
    {
        $data['judul'] = "Data Project";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['project'] = $this->Project_model->get();
        $data['pesanan'] = $this->Pesanan_model->get();
        $data['paket'] = $this->Paket_model->get();
        $data['userdata'] = $this->User_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("project/vw_project", $data);
        $this->load->view("layout/footer", $data);
    }


    function tambah()
    {
        $data['judul'] = "Tambah Data Project";
        $data['userdata'] = $this->User_model->get();
        $data['pesanan'] = $this->Pesanan_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_project', 'Nama Project', 'required', [
            'required' => 'Nama Project Wajib di isi'
        ]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Project', 'required', [
            'required' => 'Deskripsi Project Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("project/vw_tambah_project", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama_project' => $this->input->post('nama_project'),
                'deskripsi' => $this->input->post('deskripsi'),
                'id_pemesanan' => $this->input->post('id_pemesanan'),
                'id_user' => $this->input->post('id_user'),
                'nama_desainer' => $this->input->post('nama_desainer'),
                'tgl_mulai' => $this->input->post('tgl_mulai'),
                'tgl_selesai' => $this->input->post('tgl_selesai'),
                'status' => $this->input->post('status'),
                'gambar' => 'default.jpg',
                
            ];
            $this->Project_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Project Berhasil Ditambah!</div>');
            redirect('Project');
        }
    }

    public function update_status($id, $status)
    {
        $this->load->model('Project_model', 'projectdata');

        //send id and status to the model to update the status
        if ($this->projectdata->update_status_model($id, $status)) {
            $this->session->set_flashdata('msg', 'Project status has been updated successfully!');
            $this->session->set_flashdata('msg_class', 'alert-success');
        } else {
            $this->session->set_flashdata('msg', 'Project status has not been updated successfully!');
            $this->session->set_flashdata('msg_class', 'alert-danger');
        }
        return redirect('project');
    }

    public function hapus($id)
    {
        $this->Project_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon  fas fa-info-circle"></i>Data Project tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i  class="icon fas fa-check-circle"></i>Data Project Berhasil Dihapus!</div>');
        }
        redirect('Project');
    }

    function edit($id)
    {
        $data['judul'] = "Edit Data Project";
        $data['pesanan'] = $this->Pesanan_model->get();
        $data['paket'] = $this->Paket_model->get();
        $data['userdata'] = $this->User_model->get();
        $data['project'] = $this->Project_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_project', 'Nama Project', 'required', [
            'required' => 'Nama Project Wajib di isi'
        ]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Project', 'required', [
            'required' => 'Deskripsi Project Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("project/vw_ubah_project", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama_project' => $this->input->post('nama_project'),
                'deskripsi' => $this->input->post('deskripsi'),
                'id_pemesanan' => $this->input->post('id_pemesanan'),
                'id_user' => $this->input->post('id_user'),
                'nama_desainer' => $this->input->post('nama_desainer'),
                'tgl_mulai' => $this->input->post('tgl_mulai'),
                'tgl_selesai' => $this->input->post('tgl_selesai'),
                'status' => $this->input->post('status'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/project/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $query = $this->db->set('gambar', $new_image);
                    if ($query) {
                        $old_image = $this->db->get_where('project', ['id' => $id])->row();
                        unlink(FCPATH . 'assets/images/project/' . $old_image->gambar);
                    }
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Project_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Project Berhasil Diubah!</div>');
            redirect('Project');
        }
    }
}
