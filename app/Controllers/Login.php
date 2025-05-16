<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Login extends BaseController
{
    public function index()
    {
        $memberModel = new \App\Models\MemberModel();
        $login = $this->request->getPost('login');
        $back = $this->request->getPost('back');
        if($back) {
            return redirect()->to('/');
        }
        if($login) {
            $member_username = $this->request->getPost('member_username');
            $member_password = $this->request->getPost('member_password');

            if($member_username == '' or $member_password == '') {
                $err = "Silahkan masukkan username dan password";
            }
            if(empty($err)) {
                $dataMember = $memberModel->where("member_username", $member_username)->first();
                if($dataMember['member_password'] != md5($member_password)) {
                    $err = "Password salah";
                }
            }
            if(empty($err)) {
                $dataSesi = [
                    'member_id' => $dataMember['member_id'],
                    'member_username' => $dataMember['member_username'],
                    'member_password' => $dataMember['member_password'],
                ];
                session()->set($dataSesi);
                return redirect()->to('/');
            }
            if($err){
                session()->setFlashdata('member_username', $member_username);
                session()->setFlashdata('error', $err);
                return redirect()->to("login");
            }
        }

        return view('login_view');
    }
}
