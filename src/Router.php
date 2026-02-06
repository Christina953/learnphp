<?php
namespace App; // kuulub App nimeruumi

// -> = “mine objekti sisse”
// => = “see võti viitab sellele väärtusele”

class Router {
    private static $routes = []; // private: sellele muutujale pääseb ligi ainult selle klassi seest; static: see muutuja kuulub klassile, mitte konkreetsele objektile
    // → alguses on tühi massiiv → sinna hakatakse route’e lisama
    private $path;

    public function __construct($path) { //mida konstruktor teeb: Kui objekt luuakse: võtab ta sisendiks URL-i eemaldab sealt kõik üleliigse
    // jätab alles ainult tee, salvestab selle objekti omadusse $this->path
        $this ->path = parse_url($path, PHP_URL_PATH);  // parse_url() on PHP sisseehitatud funktsioon, võtab URL-i ja tükeldab selle osadeks
    // PHP_URL_PATH ütleb: anna mulle ainult URL-i tee (path), mitte domeen, query ega midagi muud
    }

    public function match() {
        foreach (self::$routes as $route) {
            if($this->path === $route['path']){
                return $route;
            }
        }
        return false;
    }
    
    public static function getRoutes(){
        return self::$routes;
    }

    public static function addRoute($path, $action) { // võtab vastu URL-i tee ($path), võtab vastu tegevuse ($action), lisab selle ühisesse staatilisse massiivi
        self::$routes[] = ['path' => $path, 'action' => $action];
    }
}