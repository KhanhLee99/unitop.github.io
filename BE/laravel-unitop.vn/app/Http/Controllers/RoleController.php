<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;

class RoleController extends Controller
{
    //
    function show(){
        $users = Role::find(3)->users;
        echo $users."<br><br>";

        $roles = USer::find(2)->roles;
        echo $roles."<br><br>";
    }
}
