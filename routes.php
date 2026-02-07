<?php

use App\Controllers\PublicController; // toob klassi lühinimega kasutusse
use App\Router; // ütleb, kust Router klass tuleb

Router::get('/', [PublicController::class, 'index']); //kutsud Router meetodit, lisad uue URL reegli
// PublicController::class tagastab stringi "App\Controllers\PublicController", index on meetod PC klassis

Router::get('/us', [PublicController::class, 'us']);

Router::get('/tech', [PublicController::class, 'tech']);

Router::get('/templating', [PublicController::class, 'templating']);

Router::get('/form', [PublicController::class, 'form']);

Router::post('/answer', [PublicController::class, 'answer']);
