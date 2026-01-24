<?php

$num = 1;
// saame teha liitmistehteid
$num = 1 + 1;
$num = $num + 1;
// saab ka lühemalt, ehk liida numile + 1
$num += 1;
// sama asja saab teha ka teiste tehetega
$num -= 1;
$num *= 2;
$num /= 2;
// ** oli astendamine
$num **=2;
// % jäägiga jagamine
$num %= 2;
// ++ ja -- liidab v lahutab ühe
$num++;
$num--;
// pow — Exponential expression, nt pow(num, exponent) arvutab num astmes exponent
$num = pow(2, 10);
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

