<?php

class Jurusan_model extends CI_Model
{
    public function getAllJurusan()
    {
        return $this->db->get("jurusan")->result_array();
    }
}
