<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Login Admin';
            $this->load->view('template/header_auth', $data);
            $this->load->view('auth/loginadm');
            $this->load->view('template/footer_auth');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('petugas', ['username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'level' => $user['level']
                ];
                $this->session->set_userdata($data);

                if ($user['level'] == 'admin') {
                    redirect('Admin');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger mr-3 ml-4" role="alert">
                Password Salah!
                </div>');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Username tidak ada!
            </div>');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('level', 'Level', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Register';
            $this->load->view('template/header_auth', $data);
            $this->load->view('auth/register');
            $this->load->view('template/footer_auth');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username')),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'nama_petugas' => $this->input->post('name'),
                'level' => $this->input->post('level')
            ];

            $this->db->insert('petugas', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success mr-3 ml-4" role="alert">
            Akun telah berhasil dibuat! Silahkan Log In
            </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');

        $this->session->set_flashdata('message', '<div class="alert alert-success mr-3 ml-4" role="alert">
            Anda telah Logout!
            </div>');
        redirect('auth');
    }
}
