<?php

class Siswa_model extends CI_Model
{
    public function getAllSiswa()
    {
        return $this->db->get("siswa")->result_array();
    }
    public function tambahDataSiswa()
    {
        $data = [
            'nama' => $this->input->post("nama", true),
            'nis' => $this->input->post("nis", true),
            'email' => $this->input->post("email", true),
            'jurusan' => $this->input->post("jurusan", true),
        ];

        $this->db->insert('siswa', $data);
    }
    public function hapusDataSiswa($id)
    {
        $this->db->delete('siswa', ["id" => $id]);
    }
    public function getSiswaById($id)
    {
        return $this->db->get_where('siswa', ["id" => $id])->row_array();
    }
    public function ubahDataSiswa($id)
    {
        $data = [
            'nama' => $this->input->post("nama", true),
            'nis' => $this->input->post("nis", true),
            'email' => $this->input->post("email", true),
            'jurusan' => $this->input->post("jurusan", true),
        ];
        $this->db->update('siswa', $data, ["id" => $id]);
    }
}
