<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function registar()
    {
        return view('registar');
    }

    public function create()
    {
        return view('task-create');
    }
    public function edit()
    {
        return view('task-edit');
    }
    public function tasks()
    {
        return view('tasks');
    }
}
