<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\JabatanModel;

class Jabatan extends BaseController
{
    public function __construct()
    {
        helper('auth_helper');
        checkLogin();
        $this->jabatan = new JabatanModel;
    }
    public function index()
    {


        $data = [
            'title' => 'Jabatan',
            'nav' => 'jabatan',
            'breadcrumb' => ['Jabatan', 'Show'],
            'data' => [
                // 'jabatan'=> $this->jabatan->findAll()
                'jabatan'=> $this->jabatan->findAll(),
            ]
        ];

        return view('admin/jabatan/index', $data);
    }

    public function ajax()
    {
        // if ($this->request->isAJAX()) {
            return view('admin/jabatan/ajax', [
                'jabatan' => $this->jabatan->findAll()
            ]);
        // }
    }
}
