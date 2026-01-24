<?php

$bool = true;
$bool = false;
$bool = true && false; 
// && tähendab JA ; JA on tõene ainult siis, kui mõlemad on tõesed
$bool = true || false; 
// || = VÕI, VÕI on väär ainult siis, kui mõlemad on väärad
$bool = !true;
$bool = !false;
// ! = EI (inglise keeles NOT), loogiline ümberpööramine
// Ehk ! ütleb lihtsalt: "kui see on tõene, tee vääraks; kui väär, tee tõeks"
$bool = 10 == 10; // võrdlustehted
$bool = 10 == '10'; 
// kas võrdne tekstiga? Oleneb keelest. Php tõlgendab selle numbriks
// kui tahan, et igal juhul ka tüüpe kontrolliks, siis ===
// selle kasutamine pigem soovitav, kõigepealt kontrollib tüüpe
$bool = 10 === '10'; 
// != mitte võrdub ja range mitte võrdub !==
// !== tähendab ei võrdu täpselt (not identical) ehk
//Väärtus on küll sama, aga tüüp erineb → true
$bool = 10 != '10';
$bool = 10 !== '10';
$bool = 10 < 2;
$bool = 10 > 2;
$bool = 10 >= 10;
$bool = 10 <= 10;
$bool = (true && false) || !(true || !false); //(true && false) → false
// !false = true, true || true = true, !true = false
// false || false = false, ehk $bool = false
var_dump($bool);
false && var_dump('bla');
// kui esimene on false, siis ta isegi ei loe, mis järgneb && märgile.
// Vasak pool on juba false → kogu avaldis on false → pole mõtet edasi vaadata
// && võib takistada koodi käivitamist
// See on tahtlik ja kasulik käitumine, mitte viga
// Seda kasutatakse tihti tingimuslikes kontrollides



// class Box {
//     public $width;
//     public $height;
//     public $length;

//     public function volume() {
//         return $this->width * $this->height * $this->length;
//     }
// }

// $box1 = new Box();
// $box1->width = 10;
// $box1->height = 10;
// $box1->length = 10;
// var_dump($box1->volume());
// var_dump($box1);

