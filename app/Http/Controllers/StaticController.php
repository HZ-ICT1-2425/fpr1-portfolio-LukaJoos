<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index() {
        return view('index');
    }

    public function profile() {
        return view('profile');
    }

    public function dashboard() {
        return view('dashboard');
    }
}
