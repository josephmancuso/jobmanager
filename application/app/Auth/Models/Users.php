<?php

namespace App\Auth\Models;

use Mira\Models\Model;

class Users extends Model
{
    public $database = "manager";

    public function authenticate()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($this->filter("username = '$username' AND password = '$password' ")) {
            return true;
        }

        return false;
    }

    public function create()
    {
        $this->column('id')->primaryKey();
        $this->column('firstname')->varchar()->length(255);
        $this->column('lastname')->varchar()->length(255);
        $this->column('username')->varchar()->length(255);
        $this->column('password')->varchar()->length(255);
        $this->column('email')->varchar()->length(255);
    }

}
