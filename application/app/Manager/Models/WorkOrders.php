<?php

namespace App\Manager\Models;

use Mira\Models\Model;

class WorkOrders extends Model
{
    public $database = "manager";

    public function getAssigned($workorder_fk = false)
    {
        $assigned = new \App\Manager\Models\Assigns();

        return $assigned->filter(" `workorder` = '$workorder_fk' ");
    }

    public function getEmployeeInfo($fk)
    {
        $assigned = new Assigns();
        return $assigned->name()->find($fk);
    }

    public function getEmployees()
    {
        $assigned = new Assigns();
        return $assigned->name()->filter("position = 'employee'");
    }
}
