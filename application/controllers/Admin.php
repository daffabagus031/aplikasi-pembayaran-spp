<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Petugas_model');
        $this->load->helper('url');
        $this->load->database();
    }

    function index()
    {
        $data['nama_petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();

        $data['judul'] = 'Pembayaran SPP Admin';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer');
    }

    function dataPetugas()
    {
        $data['nama_petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('level', 'Level', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['petugas'] = $this->Petugas_model->getAllPetugas();
            $data['judul'] = 'Pembayaran SPP Admin';
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/topbar');
            $this->load->view('admin/data_admin', $data);
            $this->load->view('template/footer');
        } else {
            $this->Petugas_model->tambahPetugas();

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data petugas <strong>berhasil</strong> ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('admin/datapetugas');
        }
    }
}
