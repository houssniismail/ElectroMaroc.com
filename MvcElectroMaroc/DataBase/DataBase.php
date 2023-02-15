<?php
class DataBase{
    static public function connect(){
        $db = new PDO("mysql:host=localhost;dbname=electromaroc","root","");
        // $db->exec("set names utf-8");
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        return $db;
    }
}
?>