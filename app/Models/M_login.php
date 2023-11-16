<?php

namespace App\Models;

use CodeIgniter\Model;

class M_login extends Model
{
    public function get_data($nisn_siswa, $password)
	{
      return $this->db->table('tb_siswa')
      ->where(array('nisn_siswa' => $nisn_siswa, 'password' => $password))
      ->get()->getRowArray();
	}

    public function login_admin($username, $password)
	{
      return $this->db->table('tb_admin')
      ->where(array('username' => $username, 'password' => $password))
      ->get()->getRowArray();
	}
}
