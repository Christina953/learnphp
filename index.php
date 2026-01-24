<?php

// klassid, kokkulepe klasside nimed suure tähega
// klass määrab omadused + tegevus
// klass ei ole objekt


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

$box1 = new Box();
$box1->width = 10;
$box1->height = 10;
$box1->length = 10;
var_dump($box1->volume());
var_dump($box1);

$box2 = new Box();
$box2->width = 20;
$box2->height = 20;
$box2->length = 20;
var_dump($box2->volume());
var_dump($box2);
var_dump($box1);

