<?php

namespace App\Models;

class Post extends Model {
    public static $table = 'posts';
    
    public $id;
    public $body;
    public $title;
}