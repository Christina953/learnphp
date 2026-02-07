<?php

namespace App;

use App\Models\Post;
use PDO;
use PDOException;

class DB
{
    private $conn;

    public function __construct($dbPath)
    {
        try {
            $this->conn = new PDO("sqlite:$dbPath");
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully"; pole vaja enam, kui connection successful
           
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function all($table, $class){
         $stmt = $this->conn->prepare("SELECT * FROM $table");
            $stmt->execute();

            // FETCH_ASSOC set the resulting array to associative
            // FETCH_NUM asendab väljade nimed numbriga, selle eelis vähemmahukam
            // FETCH_BOTH annab mõlemad
            // FETCH_OBJ annab objektd
            // FETCH_CLASS ootab argumenti klass
            $stmt->setFetchMode(PDO::FETCH_CLASS, $class); 
            return $stmt->fetchAll();
            
    }
}
