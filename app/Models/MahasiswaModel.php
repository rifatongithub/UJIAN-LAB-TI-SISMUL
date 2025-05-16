<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'slug', 'npm', 'alamat', 'tgl_lahir'];

    public function getMahasiwa($slug = false)
    {
        if($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

}