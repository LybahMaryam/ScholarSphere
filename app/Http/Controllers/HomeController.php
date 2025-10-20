<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
       $posts = Post::with('user')->latest()->get(); // Fetch latest posts
        return view('home',compact('posts'));
        //compact('posts')
    }
}

