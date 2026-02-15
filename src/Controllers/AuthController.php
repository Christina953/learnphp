<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{
    public function loginForm() {
        view('auth/login');
    }

    public function login() {
        $user = User::where('email', $_POST['email'])[0] ?? null;
        if($user && password_verify($_POST['password'], $user->password)) {
            $_SESSION['userId'] = $user->id;
            redirect('/');
        }
        else {
            redirect('/login');
        }
    }

    public function registerForm()
    {
        view('auth/register');
    }

    public function register()
    {
        $user = User::where('email', $_POST['email'])[0] ?? null;
        if (
            !$user &&
            isset($_POST['email']) &&
            isset($_POST['password']) &&
            isset($_POST['password_confirmation']) &&
            $_POST['password_confirmation'] === $_POST['password']
        ) {
            $user = new User();
            $user->email = $_POST['email'];
            $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $user->save();
            redirect('/login');
        } else {
            redirect('/register');
        }
    }

    public function logout() {
        unset($_SESSION['userId']);
        redirect('/');
    }
}
