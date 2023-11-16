<?php

namespace App\Controllers;

class Siswa extends BaseController
{

    public function index()
    {
        if (session()->get('status') == '') {
          session()->setFlashdata('gagal', 'Anda belum login');
          return redirect()->to(base_url('Login_siswa'));
        }

        $header['title']='Dashboard';
        echo view('partial/header',$header);
        echo view('partial/top_menu');
        echo view('partial/side_menu_siswa');
        echo view('siswa/index', $header);
        echo view('partial/footer');
    }

    public function password()
    {
        // if (session()->get('status') == '') {
        //   session()->setFlashdata('gagal', 'Anda belum login');
        //   return redirect()->to(base_url('Login_siswa'));
        // }

        $header['title']='Dashboard';
        echo view('partial/header',$header);
        echo view('partial/top_menu');
        echo view('partial/side_menu_siswa');
        echo view('siswa/index', $header);
        echo view('partial/footer');
    }

    
}
