<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Pesanan_model extends CI_Model
{

    public $table = 'pesanan';
    public $id = 'pesanan.id';
    private $_client;
    public function __construct()
    {
        parent::__construct();
        $this->_client = new Client([
            'base_uri' => 'http://localhost/rest-api-uas/pesanan',
            'auth' => ['reza', 'reza']
        ]);
    }

    public function get()
    {
        // $this->db->from($this->table);
        // $query = $this->db->get();
        // return $query->result_array();
        $response = $this->_client->request('GET', 'pesanan', [
            'query' => [
                'BPF-TI' => 'bpftiabcde'
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function getById($id)
    {
        // $this->db->from($this->table);
        // $this->db->where('id', $id);
        // $query = $this->db->get();
        // return $query->row_array();
        $response = $this->_client->request('GET', 'pesanan', [
            'query' => [
                'id' => $id,
                'BPF-TI' => 'bpftiabcde'
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function insert($data)
    {
        // $this->db->insert($this->table, $data);
        // return $this->db->insert_id();
        $response = $this->_client->request('POST', 'pesanan', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function delete($id)
    {
        // $this->db->where($this->id, $id);
        // $this->db->delete($this->table);
        // return $this->db->affected_rows();
        $response = $this->_client->request('DELETE', 'pesanan', [
            'form_params' => [
                'id' => $id,
                'BPF-TI' => 'bpftiabcde'
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function tpesanan()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->num_rows();
    }
}
