<?php
require_once "database.php";

class UserModel
{
    static public function mdlShowUsers($table, $item, $value)
    {
        $stmt = Database::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
        $stmt->bindParam(":" . $item, $value, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
        //$stmt->close();
        $stmt = null;
    }
}
