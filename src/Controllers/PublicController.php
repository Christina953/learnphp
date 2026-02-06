<?php

namespace App\Controllers;

class PublicController
{
    public function index()
    {
        $title = 'World News';
        include __DIR__ . '/../../views/page.php'; //DIR on PHP maagiline konstant, selle faili kausta täispikk teekond, kus see rida asub, väldib probleemi “works only on my machine”
    }

    public function us()
    {
        $title = 'U.S News';
        include __DIR__ . '/../../views/page.php';
    }
    public function tech()
    {
        $title = 'Tech News';
        include __DIR__ . '/../../views/page.php';
    }
}
