<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Routing\Controller;


class AdminController extends Controller
{
    public function dashboard()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.dashboard', compact('posts'));
    }
}
