<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas_model extends CI_Model
{
    public function getAllPetugas()
    {
        return $this->db->get('petugas')->result_array();
    }

    public function tambahPetugas()
    {
        $data = [
            'username' => htmlspecialchars($this->input->post('username')),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'nama_petugas' => $this->input->post('name'),
            'level' => $this->input->post('level'),
            'is_active' => 1,
            'date_created' => time()
        ];

        $this->db->insert('petugas', $data);
    }
}
