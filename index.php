<?php

class Box {
    public $num;
}

$num1 = 1;
$num2 = &$num1; // & tähendab: “viita samale mälukohale”, $num1 ja $num2 on üks ja sama asi, lihtsalt kaks nime
$num2 = 2;
var_dump($num1, $num2);

// PHP-s on objektid vaikimisi by reference-like, $box1 ja $box2 ei hoia objekti ennast, nad hoiavad viidet objektile
// $box2 viitab samale objektile, millele $box1 juba viitab, muudad ühte ja sama objekti,mõlemad muutujad näevad muutust
$box1 = new Box();
$box1->num = 1;
$box2 = $box1;
$box2 = clone $box1; // kui ei taha, et oleks viide, vaid tõesti koopia
$box2->num = 2; 
var_dump($box1->num, $box2->num);
var_dump($box1,$box2);

// PHP-s on võimalik töötada nii väärtuste kui viidetega, ja need käituvad väga erinevalt.
$array = [1,2,3,4,5];

for($i=0;$i<count($array);$i++){ 
    $num = &$array[$i]; // See muutuja EI OMA väärtust, vaid VIITAB väärtusele.
    $num *=2;
}

foreach($array as &$num) {
    $num *=2;
    var_dump($num);
}
var_dump($array);