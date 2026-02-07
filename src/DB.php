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

    public function all($table, $class)
    {
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

        public function find($table, $class, $id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM $table WHERE id=$id");
        $stmt->execute();

        // FETCH_ASSOC set the resulting array to associative
        // FETCH_NUM asendab väljade nimed numbriga, selle eelis vähemmahukam
        // FETCH_BOTH annab mõlemad
        // FETCH_OBJ annab objektd
        // FETCH_CLASS ootab argumenti klass
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        return $stmt->fetch();
    }

    public function insert($table, $fields)
    {
        $fieldNames = array_keys($fields);
        $fieldNamesText = implode(', ', $fieldNames);
        $fieldValuesText = implode("', '", $fields);
        $sql = "INSERT INTO $table ($fieldNamesText)
                VALUES('$fieldValuesText')";

        $this->conn->exec($sql);
    }

    public function update($table, $fields, $id) {
        $updateFieldsText = '';
        foreach($fields as $name=>$value) {
            $updateFieldsText .= "$name= '$value', ";
        }
        $updateFieldsText = substr($updateFieldsText, 0, -2);
        $sql = "UPDATE $table SET $updateFieldsText WHERE id=$id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    public function delete($table, $id) {
        $sql = "DELETE FROM $table WHERE id=$id";
        // use exec() because no results are returned
        $this->conn->exec($sql);
    }
}
