<?php

// klassid, kokkulepe klasside nimed suure tähega
// klass määrab omadused + tegevus
// klass ei ole objekt
// funktsioonid on tihti public, aga omadused private

class Box {
    public $width; // “Seda omadust või meetodit võib kasutada igaüks, igalt poolt.”
    // protected $width; saab kasutada selles klassis ja tema alamklassides
    // private $width; saab kasutada ainult selles samas klassis
    public $height;
    public $length;

    // Miks üldse peita omadusi? 1) hoiab andmed kontrolli all 2)väldib valesid väärtusi (nt laius = -100)
    // 3) koodi on hiljem lihtsam muuta. Kuidas vältida neg väärtust publicu puhul?

    public function setLength(int $length) {
        if($length<0){
            throw new Exception('Add positive value'); // throw ja return lõpetab, siin else pole vaja
        }
        $this->length = $length;
    }

    public function volume() {
        return $this->width * $this->height * $this->length; 
    }
}

class MetalBox extends Box {
    public $weightPerUnit;
    public function weight () {
        return $this ->volume() * $this-> weightPerUnit;
    }
}
$metal1 = new MetalBox();
$metal1->width = 10;
$metal1->height = 10;
$metal1->setLength(10);
var_dump($metal1);
