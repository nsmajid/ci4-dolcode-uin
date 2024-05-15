<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct() {
        // helper('auth_helper');
        checkLogin();
        

    }
    public function index(): string
    {
        
        $data = [
            'title' => 'Templating',
            'nav' => 'dashboard',
            'breadcrumb' => ['Templating','Show']
        ];

        return view('dashboard/index',$data);
    }
    function coba(){
        
    }
}
