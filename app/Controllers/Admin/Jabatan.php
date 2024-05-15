<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Jabatan extends BaseController
{
    public function __construct()
    {
        helper('auth_helper');
        checkLogin();
    }
    public function index()
    {
        $data = [
            'title' => 'Jabatan',
            'nav' => 'jabatan',
            'breadcrumb' => ['Jabatan', 'Show']
        ];

        return view('admin/jabatan/index', $data);
    }


}
