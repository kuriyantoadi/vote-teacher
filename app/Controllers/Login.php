<?php

namespace App\Controllers;

use App\Models\M_login;
use App\Controllers\BaseController;

class Login extends BaseController
{

    public function index(): string
    {
      if(session('id_user')){
         return redirect()->to(site_url('Siswa'));
      }

      return view('siswa/login');
    }

    public function login_siswa() 
    {
      $m_login = new M_login();

      $nisn_siswa = $this->request->getPost('nisn_siswa');
      $password = sha1($this->request->getPost('password'));

      $cek_login = $m_login->get_data($nisn_siswa, $password);

      if($cek_login){

         if (($cek_login['nisn_siswa'] == $nisn_siswa) && ($cek_login['password'] == $password) && ($cek_login['status'] == 'siswa'))
         {
            session()->set('nisn_siswa', $cek_login['nisn_siswa']);
            session()->set('nama_siswa', $cek_login['nama_siswa']);
            session()->set('id_siswa', $cek_login['id_siswa']);
            session()->set('status', $cek_login['status']);
            return redirect()->to(base_url('Siswa'));

         }elseif (($cek_login['nisn_siswa'] == $email) && ($cek_login['user_pass'] == $password) && ($cek_login['status'] == 'user')){
            session()->set('nisn_siswa', $cek_login['nisn_siswa']);
            session()->set('user_nama', $cek_login['user_nama']);
            session()->set('user_id', $cek_login['user_id']);
            return redirect()->to(base_url('User'));
         } else {
            session()->setFlashdata('gagal', 'Username / Password salah');
            return redirect()->to(base_url('Login_siswa'));
         }

      }else{
         session()->setFlashdata('gagal', 'Username / Password salah');
            return redirect()->to(base_url('Login_siswa'));
      }
   }

   public function logout_siswa() 
   {
      session()->destroy();
      return redirect()->to(base_url('Login_siswa'));
   }


   // awal admin
   public function admin(): string
    {
      $header['title']='Login Admin';
      return view('admin/login', $header);
    }


   public function login_admin() 
   {
      $m_login = new M_login();

      $username = $this->request->getPost('username');
      $password = sha1($this->request->getPost('password'));

      $cek_login = $m_login->login_admin($username, $password);

      if($cek_login){

         if (($cek_login['username'] == $username) && ($cek_login['password'] == $password) && ($cek_login['status'] == 'admin'))
         {
            session()->set('username', $cek_login['username']);
            session()->set('id_admin', $cek_login['id_admin']);
            return redirect()->to(base_url('Admin'));

         // }elseif (($cek_login['user_email'] == $email) && ($cek_login['user_pass'] == $password) && ($cek_login['status'] == 'user')){
         //    session()->set('user_email', $cek_login['user_email']);
         //    session()->set('user_nama', $cek_login['user_nama']);
         //    session()->set('user_id', $cek_login['user_id']);
         //    return redirect()->to(base_url('User'));
         } else {
            session()->setFlashdata('gagal', 'Username / Password salah');
            // return redirect()->to(base_url('Admin/login'));
            echo "test1";
         }

      }else{
         session()->setFlashdata('gagal', 'Username / Password salah');
         echo "test2";
            // return redirect()->to(base_url('Admin/login'));
      }
   }

   public function logout_admin() 
   {
      session()->destroy();
      return redirect()->to(base_url('Admin/login'));
   }
   // akhir admin




}
