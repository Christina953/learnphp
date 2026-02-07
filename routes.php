<?php

use App\Controllers\PublicController; // toob klassi lühinimega kasutusse
use App\Router; // ütleb, kust Router klass tuleb

Router::addRoute('/', [PublicController::class, 'index']); //kutsud Router meetodit, lisad uue URL reegli
// PublicController::class tagastab stringi "App\Controllers\PublicController", index on meetod PC klassis

Router::addRoute('/us', [PublicController::class, 'us']);

Router::addRoute('/tech', [PublicController::class, 'tech']);

Router::addRoute('/templating', [PublicController::class, 'templating']);

Router::addRoute('/form', [PublicController::class, 'form']);

Router::addRoute('/answer', [PublicController::class, 'answer']);
