<?php

// klassid, kokkulepe klasside nimed suure tähega
// klass määrab omadused + tegevus
// klass ei ole objekt
// public tähendab: “Seda omadust või meetodit võib kasutada igaüks, igalt poolt.”


class Box {
    public $width;
    public $height;
    public $length;

    public function volume() {
        return $this->width * $this->height * $this->length; // kui this ees $ siis peale noolt enamasit $ pole vaja
    } // $this on eriline muutuja, mis viitab praegusele objektile.
      //Teisisõnu: see “mina” objekt, mille sees see meetod töötab.
      //Kui oleks ainult width → PHP ei tea, millise objekti width sa mõtled
      // $this ütleb: “kasuta just seda objekti, millelt meetod kutsuti”
}

// inheritance, üks klass saab teise klassi omadused ja meetodid endale,
// extends Box ütleb PHP-le: „Võta kõik, mis on Box klassis,
// ja anna see MetalBox klassile (alamklass), ilma, et peaksid neid uuesti kirjutama.

class MetalBox extends Box {
    public $weightPerUnit;
    public function weight () {
        return $this ->volume() * $this-> weightPerUnit;
    }
}
$metal1 = new MetalBox();
$metal1->width = 10;
$metal1->height = 10;
$metal1->length = 10;
$metal1->weightPerUnit = 2;
var_dump($metal1);
var_dump($metal1->volume());
var_dump($metal1->weight());