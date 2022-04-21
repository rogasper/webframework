<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $data = [
            'nav' => 'user',
            'nama' => 'Administrator',
            'list' => $userModel->findAll()
        ];

        return view('/user', $data);
    }

    public function detail($username)
    {
        $userModel = new UserModel();
        $data = [
            'nav' => 'user',
            'nama' => 'Administrator',
            'list' => $userModel->where(['username' => $username])->first()
        ];

        return view('detail', $data);
    }
}
