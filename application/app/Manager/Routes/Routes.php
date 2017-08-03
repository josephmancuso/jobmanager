<?php

use Mira\Route;
use Mira\Render\Render;

use App\Manager\Models\Employees;
use App\Manager\Models\WorkOrders;
use App\Manager\Models\Assigns;


use Mira\Cache\Cache;

Route::get('single/', function () {
    Render::view('manager.single');
});

Route::get('invoice/', function () {
    $employees = new Employees();
   
    Render::view('manager.invoice');
});

Route::get('jobs/', function () {

    Render::view('manager.jobs', [
        'workorders' => new WorkOrders()
    ]);
});



Route::get('home/', function () {
    $workorders = new WorkOrders();
    $employees = new Employees();

    Render::view('manager.index', [
        'workorders' => $workorders,
        'employees' => $employees->all()
    ]);
});


