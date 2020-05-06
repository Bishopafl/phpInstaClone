<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{   
    // authenticates user first before user has access to posts
    // if user is not authenticated, redirects to the login screen
    public function __construct() {
        $this->middleware('auth');
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {
        // gets data from image and stores it!
        $data = request()->validate([
            // 'another' => '', shows a non-required field
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);
        // get authenticated user, go into posts and create their post!
        auth()->user()->posts()->create($data);

        dd( request()->all() );
    }
}
