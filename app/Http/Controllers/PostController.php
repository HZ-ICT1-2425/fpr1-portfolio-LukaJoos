<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('blog');
    }

    public function show($slug) {
        $viewpath = "posts.$slug";
        if (view()->exists($viewpath)) {
            return view($viewpath);
        }
        abort(404, 'post not found');
    }
}
