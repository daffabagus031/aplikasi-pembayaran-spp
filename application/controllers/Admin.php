<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
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
}
