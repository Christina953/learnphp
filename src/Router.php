<?php
namespace App; // kuulub App nimeruumi

// -> = “mine objekti sisse”
// => = “see võti viitab sellele väärtusele”

class Router {
    private static $routes = []; // private: sellele muutujale pääseb ligi ainult selle klassi seest; static: see muutuja kuulub klassile, mitte konkreetsele objektile
    // → alguses on tühi massiiv → sinna hakatakse route’e lisama
    private $path;

    public function __construct($path) { //Konstruktor on eriline meetod. See käivitatakse automaatselt, kui kirjutad new Router(...)
        $this ->path = $path; // Igal Routeril on oma tee, mille ta konstruktoris kaasa saab.
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