<?php
//massiivid
$array = [1 , 2, 3];
var_dump($array[1]);
//kuidas lisada massiivi, array [] = 4 lisab array lõppu selle väärtuse
$array[] = 4;
// saab array-s olevat arvu muuta
$array[2] = 22;
$array = [
    'name' => 'Christina',
    'age' => 50,
    ];
//See on võti ja väärtus (key => value)
//Seega massiiv sidub võtme "name" väärtusega "Christina"

// võib ka miksida
$array = [
    1,
    'hello' => 'world',
    2,
    3,
    'cool' => 'stuff',
    '4',
    true,
    [1, 2, 3],
    ];
// kui array sisaldab omakorda array'd, siis neid nimetatakse mitmemõõtmeliseks array'ks
// kui tahad teise array väärtust kätte saada, siis nii:
var_dump($array[5],[1]);
$array = [
    [1,2,3],
    [4,5,6],
    [7,8,9],
];
var_dump($array[1][2]);
$array = [
    [[1,2,3],
    [4,5,6],
    [7,8,9],[1,2,3],
    [4,5,6],
    [7,8,9],[1,2,3],
    [4,5,6],
    [7,8,9],],
    [[1,2,3],
    [4,5,6],
    [7,8,9],[1,2,3],
    [4,5,6],
    [7,8,9],[1,2,3],
    [4,5,6],
    [7,8,9],],
    [[1,2,3],
    [4,5,6],
    [7,8,9],[1,2,3],
    [4,5,6],
    [7,8,9],[1,2,3],
    [4,5,6],
    [7,8,9]],
];
var_dump($array[2][2][2]);
$array = ['apple', 'cherry','banana'];
$text = implode(',',$array); // see muudab nimekirja väärtustest teksti
// explode töötab vastupidi, muudab teksti array'ks
var_dump($text);



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

