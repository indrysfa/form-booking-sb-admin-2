<?php

class Home extends CI_Controller {
    public function index($nama = '')
    {
        $data['judul'] = 'Home Page';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('admin/home', $data);
        $this->load->view('templates/footer');
    }
}