<?php
require_once "database.php";

class MainModel
{
    //Devuelve un item de la BD
    static public function mdlShowItems($table, $item, $value) //usuarios, id, 1
    {
        if ($item != null) {
            $stmt = Database::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
            $stmt->bindParam(":" . $item, $value, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
        } else {
            $stmt = Database::connect()->prepare("SELECT * FROM $table");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        $stmt = null;
    }

    static public function mdlFindByID($table, $campo, $item, $value)
    {
        $stmt = Database::connect()->prepare("SELECT $campo FROM $table WHERE $item = :$item");
        $stmt->bindParam(":" . $item, $value, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchColumn();
        $stmt = null;
    }
}
