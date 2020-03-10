<?php

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Siswa_model");
    }
    public function index()
    {
        $data["judul"] = "Daftar Siswa";
        $data["active"] = ["", "active", ""];
        $data["siswa"] = $this->Siswa_model->getAllSiswa();
        $this->load->view("templates/header", $data);
        $this->load->view("siswa/index", $data);
        $this->load->view("templates/footer");
    }
}
