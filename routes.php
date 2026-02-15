<?php

use App\Controllers\AuthController;
use App\Controllers\PublicController; // toob klassi lühinimega kasutusse
use App\Controllers\PostsController;
use App\Router; // ütleb, kust Router klass tuleb

Router::get('/', [PublicController::class, 'index']); //kutsud Router meetodit, lisad uue URL reegli
// PublicController::class tagastab stringi "App\Controllers\PublicController", index on meetod PC klassis

Router::get('/us', [PublicController::class, 'us']);

Router::get('/tech', [PublicController::class, 'tech']);

Router::get('/templating', [PublicController::class, 'templating']);

Router::get('/form', [PublicController::class, 'form']);

Router::post('/answer', [PublicController::class, 'answer']);

Router::get('/posts', [PostsController::class, 'index']);

Router::get('/posts/create', [PostsController::class, 'create']);
Router::post('/posts', [PostsController::class, 'store']);

Router::get('/posts/view', [PostsController::class, 'show']);
Router::get('/posts/edit', [PostsController::class, 'edit']);
Router::post('/posts/edit', [PostsController::class, 'update']);
Router::get('/posts/delete', [PostsController::class, 'destroy']);

Router::get('/register', [AuthController::class, 'registerForm']);
Router::post('/register', [AuthController::class, 'register']);

Router::get('/login', [AuthController::class, 'loginForm']);
Router::post('/login', [AuthController::class, 'login']);

Router::get('/logout', [AuthController::class, 'logout']);