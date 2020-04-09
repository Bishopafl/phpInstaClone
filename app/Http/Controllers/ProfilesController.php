<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    /**
     * Show a customized Profile Controller to user.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($user)
    {
        // find the user in the database
        $user = User::find($user);
        // return the user data via an array back to the view
        return view('home', [
            'user' => $user,
        ]);
    }
}
