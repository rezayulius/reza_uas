<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project_model extends CI_Model
{

    public $table = 'project';
    public $id = 'project.id';
    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

    public function update_status_model($id, $status)
    {
        if ($status == 'Selesai') {
            $sval = 'Pemeriksaan';
        } else if ($status == 'Pemeriksaan') {
            $sval = 'Pengerjaan';
        } else {
            $sval = 'Selesai';
        }
        // update status value in database 
        $data = array('status' => $sval);
        $this->db->where('id', $id);
        return $this->db->update('project', $data);
    }

    public function tproject()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->num_rows();
    }
}
