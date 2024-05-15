<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Karyawan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Karyawan',
            'nav' => 'karyawan',
            'breadcrumb' => ['Karyawan', 'Show']
        ];

        return view('admin/karyawan/index', $data);
    }

    
}
