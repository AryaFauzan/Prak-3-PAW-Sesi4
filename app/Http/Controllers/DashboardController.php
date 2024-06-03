<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function add(){
        return view('add');
    }

    public function edit(){
        return view('edit');
    }
}
