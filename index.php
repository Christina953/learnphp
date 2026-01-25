<?php

class Box {
    public int $width;
    public $height;
    public $length;

    // magic methods
    public function __construct($width, $height,$length) // see võimaldab muutujad lisada kohe new MetalBox(10,10,10)
    {
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
        var_dump('Object created');
        // see on eriline funktsioon, mis käivitub automaatselt, kui objekt luuakse (nt New Metal Box)
        //seda kasutatakse: algväärtuste seadmiseks, kohustuslike andmete küsimiseks, objekti “valmis seisu” panemiseks
        // Konstruktor = kasutusjuhend koodis
    }
    // see on eriline meetod, mis käivitub automaatselt, kui objekt hävitatakse
    // Milleks destruktorit päriselt kasutatakse? 1) Ressursside vabastamiseks (faili sulgemine, andmebaasiühenduse
    // lõpetamine, lukustuste vabastamine) 2) Puhastustöö (cleanup), 3) Debugimiseks (õppimisel)
    // Kokkuvõte: __destruct() kasutatakse ressursside vabastamiseks ja puhastamiseks, mitte äriloogika jaoks.

    public function __destruct(){
        var_dump('Object destroyed');
    }
    
    // echo saab näidata teksti, ehk kasutatakse selleks, et öelda php-le
    // kuidas seda objekti tekstina (stringina) näidata? Kus seda päriselt kasutatakse? 1) echo $object
    // 2) print $object; 3) logides; 4) debugimisel 5)HTML-i kuvamisel . Ehk teeb objekti inimloetavaks, mugavalt prinditavaks
    public function __toString() {
        return 'some box';
    }

    // Käivitatakse automaatselt, kui: proovid lugeda omadust mida ei ole olemas või on private / protected
    // võimaldab kontrollitud ligipääsu peidetud või virtuaalsetele omadustele
    public function __get($name){
        var_dump($name);
        return 'some value';
    }

    // __set() on maagiline meetod, mis käivitatakse automaatselt, kui proovid omadusele väärtust anda aga see omadus
    // ei eksisteeri või on private / protected. Kasutatakse: 1) Andmete kontroll (validation), ei lase valesid väärtusi sisse.
    // 2) Virtuaalsed omadused; 3) Debugimine (õppimisel), näed kohe, mis toimub.
    //võimaldab kontrollida ja töödelda omadustele väärtuse panemist, kui sellele ei pääse otse ligi. 
    public function __set($name, $value){
        var_dump($name, $value);
    }

    public function setLength(int $length) {
        if($length<0){
            throw new Exception('Add positive value');
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
function makeBox() { // toimib funktsiooni sees, aga hävitatakse funktsiooni lõppedes
    $metal1 = new MetalBox(10,10,10);
    var_dump($metal1);
}
makeBox();
// unset($metal1); // tühjendab ära muutujad, kas selle puhul objekt hävitatakse
$metal1 = new MetalBox(10,10,10);
var_dump($metal1);
echo $metal1;
var_dump($metal1->coolbeans);
$metal1->catlitter = 'asdada';
var_dump('end');
