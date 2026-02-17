<?php
// abifunktsioonid

use App\Models\User;

// asendan package'ga
// function dump(...$vars) {
//     echo '<pre>';
//     var_dump(...$vars); 
//     echo '</pre>'; 
// }

function view($viewName, $variables=[])
{
    extract ($variables); // võtab massiivi võtmed, teeb neist muutujanimed, väärtused lähevad muutujate väärtusteks
    // teeb sisuliselt selle: $title = 'World News';
    include __DIR__ . "/views/$viewName.php"; 
}

// asendan package'ga
// function dd(...$vars) { // dd= dump & die
//     dump(...$vars);
//     die;
// }

function redirect($path) {
    header('Location: ' . $path);

}

function auth() {
    $id = $_SESSION['userId'] ?? null;
    if($id) {
        return User::find($id);
    }
    return null;
}