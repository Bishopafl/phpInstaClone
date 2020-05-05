<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create() {
        return view('posts.create');
    }

    public function store() {
        // gets data from image and stores it!
        $data = request()->validate([
            'caption' => 'required',
            'image' => 'required',
        ]);

        dd( request()->all() );
    }
}
