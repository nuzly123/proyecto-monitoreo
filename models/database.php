<?php
class Database{
    static public function connect(){
        $link = new PDO("mysql:host=localhost;dbname=monitoreo_aerososa", "root", "");
        $link -> exec("set names utf8");
        return $link;
    }
}
?>