<?php
// abifunktsioonid
function dump(...$vars) {
    echo '<pre>';
    var_dump(...$vars); 
    echo '</pre>'; 
}

function view($viewName, $variables=[])
{
    extract ($variables); // võtab massiivi võtmed, teeb neist muutujanimed, väärtused lähevad muutujate väärtusteks
    // teeb sisuliselt selle: $title = 'World News';
    include __DIR__ . "/views/$viewName.php"; 
}

function dd(...$vars) { // dd= dump & die
    dump(...$vars);
    die;
}

function redirect($path) {
    header('Location: /posts');
}