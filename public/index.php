<?php
// et saada teada, mis kasutaja on sisestanud $_SERVER on globaalne muutuja
// et oleks formateeritud
function dump(...$vars) { // ... annab võimaluse printida välja erinevaid
    echo '<pre>';
    var_dump(...$vars);
    echo '</pre>';
}

//include '../src/Router.php'; // kui include feilib, siis ta ei anna fatal errorit, klasside jaoks on parem require
// kui kutsuda klassi välja mitu korda, siis tekib error, siis saab lisada _once, sellisel juhul ainult üks laetakse ära
// require_once '../src/Router.php';
// require_once '../src/DB.php';
// kuna klasse palju, siis lihtsam require asemel kasutada spl_autoload_registrit,
// “Kui keegi proovib kasutada klassi, mida pole veel laaditud, kutsu see funktsioon.”
// PHP annab sellele funktsioonile klassi täisnime (koos namespace’iga).
// PHP-s (nagu paljudes keeltes) on \ erimärk – seda kasutatakse escape-märgina.
// Näited: \n → reavahetus; \t → tab; \" → jutumärk stringis
// Seega ühte kaldkriipsu ei saa stringis niisama kirjutada. üks \ stringi sees = \\ koodis

spl_autoload_register(function ($class) {
    
    $class = str_replace('App\\', '', $class); // See eemaldab namespace’i alguse App\. Miks? Sest failid on kaustas src/ ilma App/ kaustata.
    
    require_once "../src/$class.php";
});

use App\Controllers\PublicController as PC; // siis võib edaspidi kasutada ainult klassi nime, kui vaja sageli kasutada
// use ... as kasutab aliast
use App\Router;

$router = new Router();
dump($router);

$db = new App\DB();
dump($db);

$controller = new PC();
dump($controller);


// switch($_SERVER['REQUEST_URI']) {
//     case '/':
//         $title = 'World News';
//         include '../views/page.php';
//         break;
//     case '/us':
//         $title = 'U.S News';
//         include '../views/page.php';
//         break;
//     case '/tech':
//         $title = 'Tech News';
//         include '../views/page.php';
//         break;
//     default:
//         echo '404 - page not found';      
// }
