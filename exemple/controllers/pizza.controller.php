<?php

require_once '../model/database.php';
session_start();
$id = $_SESSION['id'];
$pizza = new pizza();
$data = $pizza->selectPizza($id);

if(isset($_POST['delete'])){
    $id = $_SESSION['id'];
    $pizza = new pizza();
    $data = $pizza->deletePizza($id);
}
if(isset($_POST['edit'])){
    // session_start();
    // $_SESSION["id_toEdit"] = $_POST['id'];

}