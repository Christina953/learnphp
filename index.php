<?php

$text = 'hello';
// teksti liitmiseks on php-s eraldi märk, see on punkt .
$text = $text . ' christina';
// on ka lühem variant .=
$text .= '!!!!';
// erinevaid stringi funktsioone https://www.php.net/manual/en/ref.strings.php
// nt ucwords - Uppercase the first character of each word in a string
$text = ucwords($text);

var_dump($text);
// string e. sõne, string toimib ka array'na, 2 positsioon,
// ehk saad viidata üksikutele tähtedele, array algab siis alati 0-ga
var_dump($text[2]);

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

