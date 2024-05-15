<?php

namespace App\Controllers\API;

use App\Models\JabatanModel;
use CodeIgniter\RESTful\ResourceController;

class Jabatan extends ResourceController
{
    protected $format    = 'json';
    public function __construct() {
        $this->jabatan = new JabatanModel;
    }

    public function index()
    {
        return $this->respond($this->jabatan->findAll());
    }

   
}
