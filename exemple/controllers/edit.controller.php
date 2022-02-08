<?php 
    require_once '../model/database.php';
    session_start();
    $id = $_SESSION["id"];
    $pizza =new pizza();
    $pizza_edit = $pizza->selectPizza($id);