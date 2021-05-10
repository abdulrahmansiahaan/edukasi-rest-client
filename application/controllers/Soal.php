<?php

class Soal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('soal_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Soal';
        $data['soal'] = $this->soal_model->getAllSoal();
        if( $this->input->post('keyword') ) {
            $data['soal'] = $this->soal_model->cariDataSoal();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('soal/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data soal';

        $this->form_validation->set_rules('soal', 'Soal', 'required');
        $this->form_validation->set_rules('is_active', 'IS Active', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('soal/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->soal_model->tambahDataSoal();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('soal');
        }
    }

    public function hapus($id)
    {
        $this->soal_model->hapusDataSoal($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('soal');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data soal';
        $data['soal'] = $this->soal_model->getSoalById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('soal/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data soal';
        $data['soal'] = $this->soal_model->getSoalById($id);
        $data['jurusan'] = ['Teknik Informatika', 'Teknik Mesin', 'Teknik Planologi', 'Teknik Pangan', 'Teknik Lingkungan'];

        $this->form_validation->set_rules('soal', 'Soal', 'required');
        $this->form_validation->set_rules('is_active', 'IS Active', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('soal/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->soal_model->ubahDatasoal();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('soal');
        }
    }

}
