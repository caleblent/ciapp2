<?php

namespace Admin\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class Users extends BaseController
{
    private UserModel $model;

    public function __construct()
    {
        $this->model = new UserModel;
    }

    public function index()
    {
        $users = $this->model->findAll();

        return view("Admin\Views\Users\index", [
            "users" => $users
        ]);
    }
}
