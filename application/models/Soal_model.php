<?php 
use GuzzleHttp\Client;

class Soal_model extends CI_model {

    private $_client;

    public function __construct() {
        $this->_client = new Client([
            'base_uri'  => 'https://check-assignment.my.id/api/',
            'auth'      => ['admin', '1234']
        ]);
    }

    public function getAllSoal()
    {
        $result = [];
        
        $response = $this->_client->request('GET', 'soal', [
            'query' => [
                'api-key' => 'keyedukasi'
            ]
        ]);
        $data = json_decode($response->getBody()->getContents(), true);

        $result = $data['data'];
        return $result;
    }

    public function tambahDataSoal()
    {
        $data = [
            "soal"      => $this->input->post('soal', true),
            "is_active" => $this->input->post('is_active', true),
            'api-key'   => 'keyedukasi'
        ];

        $response = $this->_client->request('POST', 'soal', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function hapusDataSoal($id)
    {
        $response = $this->_client->request('DELETE', 'soal', [
            'form_params' => [
                'id' => $id,
                'api-key' => 'keyedukasi'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function getSoalById($id)
    {
        $result = [];
        
        $response = $this->_client->request('GET', 'soal', [
            'query' => [
                'api-key' => 'keyedukasi',
                'id' => $id
            ]
        ]);
        $data = json_decode($response->getBody()->getContents(), true);

        $result = $data['data'][0];
        return $result;
    }

    public function ubahDataSoal()
    {
        $data = [
            "soal"      => $this->input->post('soal', true),
            "is_active" => $this->input->post('is_active', true),
            "id"        => $this->input->post('id', true),
            'api-key'   => 'keyedukasi'
        ];

        $response = $this->_client->request('PUT', 'soal', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function cariDataSoal()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('Soal')->result_array();
    }
}