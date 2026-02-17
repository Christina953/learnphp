<?php
session_start();

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../helpers.php';
require __DIR__. '/../routes.php';

use App\Router; 
// dump($_SERVER); 

$router = new Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']); 
$match = $router->match();
if ($match){ 
    if(is_callable($match['action'])) { // is_callable kontrollib kas saab välja kutsuda
       call_user_func($match['action']); // käivitab selle funktsiooni
    } else if (is_array($match['action'])) {
        $className = $match['action'][0];
        $controller = new $className();
        $method = $match['action'][1];
        $controller->$method();
    }
} else {
        echo '404 - page not found';
}

