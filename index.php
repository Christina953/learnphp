<?php

$num =  1 + 2;
$num =  0.1 + 0.2; // php annab tulemuseks float(0.30000000000000004)
// see tuleneb sellest ,et kõiki komaarve ei saa kahendsüsteemis täpselt kirjutada
// sellepärast nt pangaandmesüsteemides on summad sentides, mitte eurodes

// üks võimalus, kuidas lahendada
$num = round (0.1 + 0.2, 1);
$num = round (0.1*10 + 0.2*10)/10;
var_dump($num);


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

