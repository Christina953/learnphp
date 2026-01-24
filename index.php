<?php

// funktsioonid, eesmärk on mingit koodi plokki korrata, et funktsioon teeks midagi, peab selle välja kutsuma

function hello() {
    var_dump('hello');
}

hello();

function helloName($name='Nameless') { // võib anda default väärtuse, kui muutuja jääb tühjaks
    var_dump("Hello $name!");
}

helloName('Christina');
helloName('Margo');

function sum($a, $b) {
    return $a+$b; // kui midagi lisada peale returni, siis seda ei toimu
}
$answer = sum(2, 4);
var_dump($answer);

function values(...$values) { // ... ükskõik mis arv väärtusi
    var_dump(...$values); // kui lisada siia ka ..., siis kirjutab numbrid eraldi välja, st nimet. spread operator
    // PHP-s on spread operator tähistatud kolme punktiga: ...See “laotab” massiivi või objektide kogumi eraldi elementideks
}
 values(1,2,3,4,5,6);

function name(string $name):string { //kui tahame et tagatus oleks ka string
    return ucwords($name);
}
// Mis on recursive (rekursiivne) funktsioon? Funktsioon, mis kutsub iseennast.
// Kasutatakse, kui probleem saab lahendatud, jagades selle väiksemateks sama tüüpi probleemideks.
// Seega iga rekursiooni puhul peab olma tingimus, mis lõpuks muutub false’iks
// kasutatakse olukordades recursive trees 
function recursive($i) {
    var_dump($i);
    if($i < 10){
        recursive($i+1);
    }
}

recursive(0);


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

