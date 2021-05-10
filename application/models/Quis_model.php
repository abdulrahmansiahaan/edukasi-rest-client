<?php 
use GuzzleHttp\Client;

class Quis_model extends CI_model {

    private $_client;

    public function __construct() {
        $this->_client = new Client([
            'base_uri'  => 'https://check-assignment.my.id/api/',
            'auth'      => ['admin', '1234']
        ]);
    }

    public function getAllQuis()
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

}