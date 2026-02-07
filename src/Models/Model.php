<?php

namespace App\Models;

use App\DB;

// abstract class tähendab, et ta ei ole mõeldud objektiks muutmiseks, et ei saa teha new
// selle point on olla nö parent klass kõikidele teistele, teised hakkavad seda extendima
abstract class Model {
    public static $table;

    public static function all() {
        $db = new DB(__DIR__ . '/../../db.sqlite');
        return $db-> all(static::$table, static::class);
    }
}