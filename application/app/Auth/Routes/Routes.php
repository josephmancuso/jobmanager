<?php

use Mira\Route;
use Mira\Render\Render;
use App\Auth\Models\Users;

// Routes Here

Route::get('login/', function(){
    Render::view('Auth.login');
});

Route::post('login/', function(){
    $users = new Users;
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($users->authenticate()) {
        Render::redirect('/');
    }

    Render::view('Auth.login', [
        'message' => 'incorrect username or password'
    ]);
});


