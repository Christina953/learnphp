<?php

function dump(...$vars) {
    echo '<pre>';
    var_dump(...$vars);
    echo '</pre>';
}

spl_autoload_register(function ($class) { // autoloader, klasside automaatne laadimine
    
    $class = str_replace('App\\', '', $class);
    require_once "../src/$class.php";
});

require '../routes.php'; // php loeb routes.php faili läbi, seal kutsutakse Router::addRoute, kõik route'd lisatakse Routeri staatilisse massiivi

use App\Router; // lubab kirjutada new Router mitte app\router

$router = new Router($_SERVER['REQUEST_URI']); // routeri objekti loomine, kui kasutaja läheb http://localhost:8000/ siis see väärtus antakse routeri konstruktorile
$match = $router->match(); // router vaatab kõiki route , kui leiab route['path'] === $this->path siis tagastab
if ($match){ //kui leieab, siis minnakse sisse
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

