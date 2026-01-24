<?php

// for loop - for tsüklis kolm osa, eraldatakse semikooloniga
// esimeses osas luuakse loendur, $i on muutuja (tihti kasutatakse just i, sest index) ja sellele antakse algväärtus
// paneb paika, kui kaua seda kontrolli tehakse, Tsükkel töötab seni, kuni see on tõene
// samm / muutmine, See juhtub pärast iga tsükli ringi, $i++ tähendab: suurenda $i väärtust ühe võrra

for($i=0; $i<10 ; $i++) {
    var_dump($i);
}
// sama asja võib teha ka teistmoodi, nii käib tagurpidi
for($i=10; $i>0 ; $i--) {
    var_dump($i);
}
// _ võib kasutada suurte numbrite puhul tuhandete eraldajana
for($i=8; $i<10_000_000 ; $i*=2) {
    var_dump($i);
}

//while loop - siin ei tea mitu korda alati
$time = time(); // tagastab Unix timestamp
var_dump($time);
$i = 0;
while($time+3 > time()){ //Tee tsüklit nii kaua, kuni algusaeg + 3 sekundit on suurem kui praegune aeg
    $i++; //Iga tsükli ring: $i suureneb 1 võrra, Midagi muud ei juhtu, tsükkel jookseb nii kiiresti kui CPU suudab
}
var_dump($i); // Näitab, mitu korda tsükkel 3 sekundi jooksul käis, erinev igal käivitamisel, sõltub arvuti kiirusest

// do while kood käivitab tsükli sisu täpselt ühe korra,
// käivitab sisu kõigepealt ja alles pärast seda kontrollib tingimust
do {
    var_dump('DO');
} while(false);

$array = ['apple', 'cherry', 'pear'];
foreach($array as $value) {  //foreach käib iga massiivi elemendi läbi, ükshaaval. $value on ajutine muutuja
// , igal tsükli ringil saab ta järgmise elemendi väärtuse, kirjutab rea haaval välja
    var_dump($value);
}

$array = ['apple', 'cherry', 'pear'];
foreach($array as $key => $value) { // $key on massiivi võtme väärtus ehk indeks, mille all see element massiivis asub
    var_dump($key, $value);
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

