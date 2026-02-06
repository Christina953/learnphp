<?php

namespace App\Controllers;

class PublicController
{
    public function index()
    {
        $title = 'World News';
        view('page', compact('title')); // võtab muutuja nimed stringidena, otsib need muutujad praegusest scope’ist
        // teeb neist assotsiatiivse massiivi, tulemuseks = 'title' => 'World News'
    }

    public function us()
    {
        $title = 'U.S News';
        view('page', compact('title'));
    }

    public function tech()
    {
        $title = 'Tech News';
        view('page', compact('title'));
    }

    public function templating()
    {
        $name = 'Christina';
        $ryhm = 'KTA-25';
        view ('templating', compact ('name', 'ryhm'));
    }
}
