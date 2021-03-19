<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('CheckAge')->only('index');
        $this->middleware('CheckRole:Subscriber')->only('dashboard');
    }
    public function index(){
        return view('admin');
    }
    public function show(){
        return view('admin');
    }

    public function dashboard(){
        return 'OK';
    }
}
