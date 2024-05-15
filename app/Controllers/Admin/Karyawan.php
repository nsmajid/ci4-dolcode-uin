<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\JabatanModel;
use App\Models\KaryawanModel;

class Karyawan extends BaseController
{
    public function __construct()
    {
        helper('auth_helper');
        checkLogin();

        $this->karyawan = new KaryawanModel;
        $this->jabatan = new JabatanModel;
    }

    public function index()
    {
        $data = [
            'title' => 'Karyawan',
            'nav' => 'karyawan',
            'breadcrumb' => ['Karyawan', 'Show'],
            'data' => [
                'karyawan' => $this->karyawan
                    ->join('jabatan', 'jabatan.id_jabatan = karyawan.id_jabatan')
                    ->findAll()
            ]
        ];

        // dd($data);

        return view('admin/karyawan/index', $data);
    }

    public function new()
    {
        $data = [
            'title' => 'Tambah Karyawan',
            'nav' => 'karyawan',
            'breadcrumb' => ['Karyawan', 'Tambah'],
            'data' => [
                'jabatan' => $this->jabatan->findAll()
            ]
        ];

        // dd($data);

        return view('admin/karyawan/new', $data);
    }

    public function create()
    {
        // d($this->request->getPost());

        $dataInsert = [
            'nama_karyawan' => $this->request->getPost('nama_karyawan'),
            'alamat' => $this->request->getPost('alamat'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'id_jabatan' => $this->request->getPost('id_jabatan'),
            'username' => str_replace(' ', '_', strtolower((string)$this->request->getPost('nama_karyawan'))),
            'password' => '123',
        ];

        $insert = $this->karyawan->insert($dataInsert);
        // dd($insert);
        session()->setFlashdata('notif', true);

        if ($insert) {
            session()->setFlashdata('notif_msg', 'Berhasil Insert');
            session()->setFlashdata('notif_cls', 'success');
        } else {
            session()->setFlashdata('notif_msg', 'Gagal Insert');
            session()->setFlashdata('notif_cls', 'danger');
        }

        return redirect()->to('admin/karyawan');
        // dd($insert);
    }

    public function edit($idKaryawan = 0)
    {
        $data = [
            'title' => 'Edit Karyawan',
            'nav' => 'karyawan',
            'breadcrumb' => ['Karyawan', 'Edit'],
            'data' => [
                'jabatan' => $this->jabatan->findAll(),
                'karyawan' => $this->karyawan->find($idKaryawan)
            ]
        ];

        // dd($data);

        return view('admin/karyawan/edit', $data);
    }

    public function update($idKaryawan = 0)
    {
        // d($this->request->getPost());
        $dataUpdate = [
            'nama_karyawan' => $this->request->getPost('nama_karyawan'),
            'alamat' => $this->request->getPost('alamat'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'id_jabatan' => $this->request->getPost('id_jabatan')
        ];
        // dd($dataUpdate);

        $update = $this->karyawan->update($idKaryawan, $dataUpdate);
        // dd($insert);
        session()->setFlashdata('notif', true);

        if ($update) {
            session()->setFlashdata('notif_msg', 'Berhasil Update');
            session()->setFlashdata('notif_cls', 'success');
        } else {
            session()->setFlashdata('notif_msg', 'Gagal Update');
            session()->setFlashdata('notif_cls', 'danger');
        }

        return redirect()->to('admin/karyawan');
        // dd($insert);
    }
}
