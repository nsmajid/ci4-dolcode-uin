<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\KaryawanModel;

class Karyawan extends BaseController
{
    public function __construct()
    {
        helper('auth_helper');
        checkLogin();

        $this->karyawan = new KaryawanModel;
    }

    public function index()
    {
        $data = [
            'title' => 'Karyawan',
            'nav' => 'karyawan',
            'breadcrumb' => ['Karyawan', 'Show'],
            'data'=>[
                'karyawan'=>$this->karyawan
                ->join('jabatan', 'jabatan.id_jabatan = karyawan.id_jabatan')
                ->findAll()
            ]
        ];

        // dd($data);

        return view('admin/karyawan/index', $data);
    }

    
}
