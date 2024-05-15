<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index(): string
    {
        helper('auth_helper');
        isLogin();

        $data = [
            'title' => 'Login',
        ];

        return view('auth/index', $data);
    }
    public function cekLogin()
    {
        $users = [
            0 =>  [
                'name' => 'Administrator',
                'username' => 'admin',
                'password' => '123',
                'level' => 'Admin'
            ],
            1 =>  [
                'name' => 'Karyawan',
                'username' => 'karyawan',
                'password' => '123',
                'level' => 'Employee'
            ],
        ];
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $findUsername = array_column($users, 'username');
        $found_key = array_search($username, $findUsername);

        if ($found_key == false && $users[$found_key]['username'] != $username) {
            session()->setFlashdata('notif',true);
            session()->setFlashdata('notif_msg','Username Salah');
            session()->setFlashdata('notif_cls','warning');
            return redirect()->back();
        }

        $user = $users[$found_key];

        if ($user['password'] != $password) {

            session()->setFlashdata('notif', true);
            session()->setFlashdata('notif_msg', 'Password Salah');
            session()->setFlashdata('notif_cls', 'warning');
            return redirect()->back();
        }
        $dataSession = $user;
        // dd($dataSession);
        //session
        session()->set($dataSession);

        session()->setFlashdata('notif', true);
        session()->setFlashdata('notif_msg', 'Welcome');
        session()->setFlashdata('notif_cls', 'success');

        return redirect()->to('/');
    }

    function logout(){
        session_destroy();
        return redirect()->to('login');
    }
}
