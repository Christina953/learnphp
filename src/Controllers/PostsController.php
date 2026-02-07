<?php

namespace App\Controllers;

use App\DB;
use App\Models\Post;
use App\Models\User;

class PostsController
{
    public function index()
    {
        $posts = Post::all();
        view('posts/index', compact('posts'));
    }
}
