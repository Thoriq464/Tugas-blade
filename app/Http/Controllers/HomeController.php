<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
    public function dashboard2(){
        return view('dashboard2');
    }
    public function dashboard3(){
        return view('dashboard3');
    }

    public function index(){
        $data = User :: get();
        return view('index', compact('data'));
    }
}
