<?php

class Home extends CI_Controller
{
    public function index($nama = 'Dicky Ardianto')
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $nama;
        //nama folder yang ada di dalam views
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer', $data);
    }
}