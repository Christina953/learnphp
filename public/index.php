<?php
// et saada teada, mis kasutaja on sisestanud $_SERVER on globaalne muutuja
// et oleks formateeritud
function dump(...$vars) { // ... annab võimaluse printida välja erinevaid
    echo '<pre>';
    var_dump(...$vars);
    echo '</pre>';
}

switch($_SERVER['REQUEST_URI']) {
    case '/':
        include '../views/index.php';
        break;
    case '/us':
        include '../views/us.php';
        break;
    case '/tech':
        include '../views/tech.php';
        break;
    default:
        echo '404 - page not found';      
}
