<?php

namespace App\Models;

use App\DB;

// abstract class tähendab, et ta ei ole mõeldud objektiks muutmiseks, et ei saa teha new
// selle point on olla nö parent klass kõikidele teistele, teised hakkavad seda extendima
abstract class Model {
    public static $table;
    public $id;

    public static function all() {
        $db = new DB(__DIR__ . '/../../db.sqlite');
        return $db-> all(static::$table, static::class);
    }

    public function save() {
        $db = new DB(__DIR__ . '/../../db.sqlite');
        $fields = get_object_vars($this);
        unset($fields['id']);
        if($this->id) {
            $db->update(static::$table, $fields, $this->id);
        } else {
            $db->insert(static::$table, $fields);
        }
        
    }

    public static function find($id) {
        $db = new DB(__DIR__ . '/../../db.sqlite');
        return $db-> find(static::$table, static::class, $id);
    }

    public function delete() {
        $db = new DB(__DIR__ . '/../../db.sqlite');
        return $db-> delete(static::$table, $this->id);
    }

}