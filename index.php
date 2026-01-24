<?php
// echo 'Hello World';

// kõik muutujad algavad $ märgiga ja semikoolon ; on oluline plokkide lõpus

$num = 10;
$num =10.2;
$name = 'Christina';
// ühekordsed jutumärgid - sellevaheline esitatakse alati tekstina
$num = 'Hello World';
// siin on oluline vahe, kas "" või ''. Topeltjutumärgid oskavad tõlgendada reavahemärki ja muutujaid
$num = "Hello \n$name";
// kui vaja multiline teksti
$num = <<<END
Hello
$name
END;
$num = true;
$num = false;
$num = null;
// on olemas array-d, on olemas kaks viisi, vanem viis
$num = array(1,2,3,3,4);
// uuem array viis kandilised sulud
$num = [1,2,3,4];
// objektid, default objekt stdClass, std tähendab standard
$num = new stdClass();
var_dump ($num);
// kui toob välja string (12), siis  näitab baitide, mitte tähemärkide arvu, nt õ puhul 2 baiti



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

