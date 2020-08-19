<?php

class modelsistem extends CI_Model
{
    public function simpan_db()
    {
        $config['upload_path'] = './assets/';
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_size'] = '2048000';
        $config['file_name'] = url_title($this->input->post('gambar'));
        $filename = $this->upload->file_name;
        $this->upload->initialize($config);
        $this->upload->do_uplad('gambar');
        $data = $this->uplad->data();

        $data = array(
            'id' => "",
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))
        );

        $this->db->insert('user', $data);
        echo "data berhasil disimpan";
    }

    public function get_user()
    {
        $data = $this->db->get('user');
        return $data->result();
    }

    public function count_user()
    {
        $data = $this->db->get('user');
        return $data->num_rows();
    }
}
