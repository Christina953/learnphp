<?php

//kontrollstruktuurid
 $num = 10;
 if ($num > 10){
    var_dump('Bigger than 10');
} else if ($num === 10) {
    var_dump('Equal to 10');
} else {
    var_dump('Smaller than 10');
}

$day = (int)date( 'N' , strtotime('25.01.2026')); // date ('N) annab, mitmes nädalapäev täna on
// strtotime() muudab teksti kujul kuupäeva ajaks (timestamp’iks)
// Tulemus on arv, millest PHP saab aru, et see on kindel kuupäev
//Mõtle: “tee tekstist kuupäev, millega arvuti oskab töötada”
//date('N', ...) - date() vormindab kuupäeva, 'N' tähendab: nädalapäeva number

var_dump($day);

if($day === 1){
    var_dump('Monday');
} else if ($day === 2) {
    var_dump('Tuesday');
} else if ($day === 3) {
    var_dump('Wednesday');
} else if ($day === 4) {
    var_dump('Thursday');
} else if ($day === 5) {
    var_dump('Friday');
} else if ($day === 6 || $day === 7) {
    var_dump('It is weekend!');
} else {
    var_dump('Weird day');
}

switch($day) {
    case 1:
       var_dump('Monday');
       break; // loeb nii kaua kui jõuab break'ini
    case 2:
        var_dump('Tuesday');
        break;
    case 3:
       var_dump('Wednesday');
       break;
    case 4:
       var_dump('Thursday');
       break;
    case 5:
       var_dump('Friday');
       break;
    case 6:
    case 7:
       var_dump('It is weekend!');
       break;
    default:
        var_dump('Weird day');
}

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

