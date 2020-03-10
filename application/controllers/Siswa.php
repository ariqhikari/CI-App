<?php

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Siswa_model");
        $this->load->helper("form");
        $this->load->library("form_validation");
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
    public function tambah()
    {
        $data["judul"] = "Form Tambah Data Siswa";
        $data["active"] = ["", "active", ""];
        $this->form_validation->set_rules("nama", "Nama", "required");
        $this->form_validation->set_rules("nis", "NIS", "required");
        $this->form_validation->set_rules("email", "Email", "required");
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("templates/header", $data);
            $this->load->view("siswa/tambah");
            $this->load->view("templates/footer");
        } else {
            $this->Siswa_model->tambahDataSiswa();
            $this->session->set_flashdata("flash", "ditambahkan");
            redirect("siswa");
        }
    }
    public function hapus($id)
    {
        $this->Siswa_model->hapusDataSiswa($id);
        $this->session->set_flashdata("flash", "dihapus");
        redirect("siswa");
    }
}
