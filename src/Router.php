<?php

namespace App; // kuulub App nimeruumi

// -> = “mine objekti sisse”
// => = “see võti viitab sellele väärtusele”

class Router
{
    private static $routes = []; // private: sellele muutujale pääseb ligi ainult selle klassi seest; static: see muutuja kuulub klassile, mitte konkreetsele objektile
    // → alguses on tühi massiiv → sinna hakatakse route’e lisama
    private $path;
    private $method;

    public function __construct($path, $method){
        $this->path = parse_url($path, PHP_URL_PATH);
        $this->method = $method;
    }

    public function match()
    {
        foreach (self::$routes as $route) {
            if ($this->path === $route['path'] && $this->method === $route['method']) {
                return $route;
            }
        }
        return false;
    }

    public static function getRoutes()
    {
        return self::$routes;
    }

    public static function addRoute($method, $path, $action){
        self::$routes[] = ['method' => $method, 'path' => $path, 'action' => $action];
    }

    public static function get($path, $action) { // mugavusfunktsioon addRoute('GET', .. ) asemel routes.php failis
        self::addRoute('GET', $path, $action);
    }
    
    public static function post($path, $action) {
        self::addRoute('POST', $path, $action);
    }
}