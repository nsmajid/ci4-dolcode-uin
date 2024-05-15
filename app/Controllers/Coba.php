<?php

namespace App\Controllers;

use App\Controllers\Admin\Users;

class Coba extends BaseController
{
    public function __construct() {
        $this->users = new Users;
    }

    public function index()
    {
        $db = \Config\Database::connect();
        // $query   = $db->query('SELECT * FROM karyawan');
        // $results = $query->getResultArray();

        $builder = $db->table('karyawan');
        $query   = $builder->get(); 
        dd($query->getResultArray());

    }
}
