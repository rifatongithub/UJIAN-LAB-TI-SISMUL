<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{

    protected $mahasiswaModel;
    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }

    public function index()
    {
        $mahasiswa = $this->mahasiswaModel->findAll();

        $data = [
            'title' => 'Data Mahasiswa',
            'mahasiswa' => $mahasiswa
        ];

        return view('mahasiswa/index', $data);
        // echo "Hellow";
    }

    public function create()
    {
        return view('mahasiswa/create');
    }

    public function save()
    {
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->mahasiswaModel->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'npm' => $this->request->getVar('npm'),
            'alamat' => $this->request->getVar('alamat'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir')
        ]);

        return redirect()->to('/mahasiswa');

    }

    public function detail($slug)
    {
        $mahasiswa = $this->mahasiswaModel->getMahasiwa($slug);
        $data = [
            'mahasiswa' => $this->mahasiswaModel->getMahasiwa($slug)
        ];

        return view('mahasiswa/detail', $data);
    }

    public function edit($slug){
        $data = [
            'mahasiswa' => $this->mahasiswaModel->getMahasiwa($slug)
        ];

        return view('mahasiswa/edit', $data);
    }

    public function update($id)
    {
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->mahasiswaModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'npm' => $this->request->getVar('npm'),
            'alamat' => $this->request->getVar('alamat'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir')
        ]);

        return redirect()->to('/mahasiswa');
    }

    public function delete($id)
    {
        $this->mahasiswaModel->delete($id);
        return redirect()->to('/mahasiswa');
    }
    
}
