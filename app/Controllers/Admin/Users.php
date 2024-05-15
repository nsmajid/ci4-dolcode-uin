<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Users',
            'nav' => null,
            'breadcrumb' => ['Users', 'Show']
        ];

        return view('layouts/main', $data);
    }

    function getNama(){
        return [
            "nama"=> "Bejo",
            "domain"=> env('API_DOMAIN')
        ];
    }
}
