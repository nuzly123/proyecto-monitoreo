<?php
require_once "database.php";

class UserModel
{
    //funciones propias de usuarios edit, update
    static public function mdlUpdateLastLogIn($id, $table){
        $date = date("Y-m-d H:i:s");
        $stmt = Database::connect()->prepare("UPDATE $table SET last_login = '{$date}' WHERE id = $id");
        $stmt->execute();
        $stmt = null;
    }
} 
?>