<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $table      = 'karyawan';
    protected $primaryKey = 'id_karyawan';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'nama_karyawan',
        'alamat',
        'jenis_kelamin',
        'id_jabatan',
        'username',
        'password',
    ];
    
    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
