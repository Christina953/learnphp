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

    public function create()
    {
        view('posts/create');
    }
    public function store()
    {
        $from = $_FILES['image']['tmp_name'];
        do {
            $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $filename = md5($_FILES['image']['name'] . microtime() . rand(PHP_INT_MIN, PHP_INT_MAX)) . '.' . $ext;
            // et and failinimele unikaalsust
            $to = __DIR__ . '/../../public/uploads/' . $filename;
        } while (file_exists($to));
        move_uploaded_file($from, $to);
        dd($_POST, $_FILES);
        $post = new Post();
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->save();
        $posts = Post::all();
        redirect('/posts');
    }

    public function show()
    {
        $post = Post::find($_GET['id']);
        view('posts/show', compact('post'));
    }

    public function edit()
    {
        $post = Post::find($_GET['id']);
        view('posts/edit', compact('post'));
    }

    public function update()
    {
        $post = Post::find($_GET['id']);
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->save();
        redirect('/posts');
    }

    public function destroy()
    {
        $post = Post::find($_GET['id']);
        $post->delete();
        redirect('/posts');
    }
}
