<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $posts = Post::latest()->paginate(10);
        return view('user.dashboard', compact('posts'));
    }

    public function profile()
    {
        return view('user.profile', ['user' => Auth::user()]);
    }
}
