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
        $title = 'World News';
        include '../views/page.php';
        break;
    case '/us':
        $title = 'U.S News';
        include '../views/page.php';
        break;
    case '/tech':
        $title = 'Tech News';
        include '../views/page.php';
        break;
    default:
        echo '404 - page not found';      
}
