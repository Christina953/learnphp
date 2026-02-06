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
        view('templating', compact('name', 'ryhm'));
    }

    public function form()
    {
        $name = $_GET['name'] ?? 'tundmatu'; // ?? ütlebki ,et kui name sätitud, siis võta name, muidu tundmatu
        // $name = isset($_GET['name']) ? $_GET['name'] : 'tundmatu'; // if lause ühel real, : on else
        // $name = 'tundmatu';
        // if (isset($_GET['name'])) { //isset sobib ka siis kui väärtust pole, see pikk viis
        //     $name = $_GET['name'];
        // }
        $ryhm = $_GET['ryhm'] ?? 'teise kooli'; 

        view('form', compact('name', 'ryhm'));
    }
}
