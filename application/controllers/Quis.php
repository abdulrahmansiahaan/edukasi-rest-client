<?php

class Quis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('quis_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Quis';
        $data['quis'] = $this->quis_model->getAllQuis();
        if( $this->input->post('keyword') ) {
            $data['quis'] = $this->quis_model->cariDataQuis();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('quis/index', $data);
        $this->load->view('templates/footer');
    }
}