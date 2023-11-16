<?php

namespace App\Controllers;


class Admin extends BaseController
{



    public function index()
    {
        $header['title']='Dashboard';
        echo view('partial/header',$header);
        echo view('partial/top_menu');
        echo view('partial/side_menu_admin');
        echo view('admin/index');
        echo view('partial/footer');
    }
}
