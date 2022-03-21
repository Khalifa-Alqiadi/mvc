<?php
require_once "database.php";

class Book{
    function selects(){
        $db = DB::getInstance();
        $allDate = $db->table("items")->get();
        return $allDate;  
    }
}
?>