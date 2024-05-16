<?php

namespace App\Controllers\API;

use App\Models\JabatanModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class Jabatan extends ResourceController
{
    protected $format    = 'json';
    public function __construct()
    {
        $this->jabatan = new JabatanModel;
    }

    public function index()
    {
        return $this->respond($this->jabatan->findAll());
    }

    public function create()
    {
        // if (!$this->request->getPost('jabatan')) {
        //     return $this->failForbidden('parameter jabatan wajib ada');
        // }

        $dataInsert = [
            'jabatan' => $this->request->getPost('jabatan'),
            'gaji' => $this->request->getPost('gaji'),
        ];

        $validation = \Config\Services::validation();

        $validation->setRules([
            'jabatan' => 'required',
        ]);

        if (!$validation->run($dataInsert)) {
            // handle validation errors
            return $this->respond($validation->getErrors());
        }

        $insert =  $this->jabatan->insert($dataInsert);

        if ($insert) {
            return $this->respond([
                'status' => true,
                'message' => 'Berhasil Insert Jabatan',
                'idJabatan' => $insert
            ]);
        } else {
            return $this->fail([
                'status' => false,
                'message' => 'Gagal insert jabatan'
            ], 400);
        }
    }

    public function update($idJabatan = 0)
    {

        // $dataUpdateRaw = $this->request->getRawInput();
        $dataUpdate = $this->request->getRawInput();

        if (count($dataUpdate) == 0) {
            return  $this->failForbidden('Parameter update minimal 1');
        }

        $update =  $this->jabatan->update($idJabatan, $dataUpdate);

        if ($update) {
            return $this->respond([
                'status' => true,
                'message' => 'Berhasil update Jabatan',
            ]);
        } else {
            return $this->fail([
                'status' => false,
                'message' => 'Gagal update jabatan'
            ], 400);
        }
    }
    public function delete($idJabatan = 0)
    {

        // $dataUpdateRaw = $this->request->getRawInput();

        if (!$this->jabatan->find($idJabatan)) {
            return  $this->failForbidden('Parameter kurang lengkap');
        }

        $delete =  $this->jabatan->delete(['id_jabatan' => $idJabatan]);

        if ($delete) {
            return $this->respond([
                'status' => true,
                'message' => 'Berhasil delete Jabatan',
            ]);
        } else {
            return $this->fail([
                'status' => false,
                'message' => 'Gagal delete jabatan'
            ], 400);
        }
    }
}
