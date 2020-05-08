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
        // if an image was uploaded, put it in the uploads directory
        // store() uses two parameters - folder where your storing, driver the image resource would be stored on.
        // the driver can be an amazon service using S3 if need be.
        // -----------------------------------
        // Trying to access the uploads through the browser?
        // Tip, using 'php artisan storage:link'
        // Why? That command creates a symbolic link between public/storage and storage/app/public
        // -----------------------------------
        $imagePath = request('image')->store('uploads','public');
        // get authenticated user, go into posts and create their post!
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);
        return redirect('/profile/' . auth()->user()->id);
    }
}
