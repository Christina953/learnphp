<?php
// klassi staatilised omadused, tegevused
// static tähendab: see kuulub KLASSILE, mitte objektile. Staatilises meetodis EI OLE $this
// Staatiline omadus või meetod on seotud klassiga, mitte objektiga, ja seda kasutatakse klassi nime kaudu
class Box {
    public static $count;

    public static function getCount(){ // Seda kutsutakse ilma objektita // staatilises funktsioonis ei saa $this välja kutsuda
        var_dump(self::class); // self viitab classile Box
        var_dump(self::$count);
        var_dump(static::class); // static viitab sellele klassile kes ta välja kutsus
        var_dump(static::$count);
    }
    public function getWidth(){// siin saab static kasutada, sest see on olemas kui klass defineeritud
        var_dump(self::class); 
        var_dump(self::$count);
        var_dump(static::class); 
        var_dump(static::$count);
        var_dump($this->width);
    }
}

class MetalBox extends Box{

}

Box::$count = 1;
Box::$count = 2; 
var_dump(Box::$count, Box::$count);
Box::getCount();
var_dump(Box::class);
MetalBox::getCount();
$box1 = new Box();
$box1->getWidth();

