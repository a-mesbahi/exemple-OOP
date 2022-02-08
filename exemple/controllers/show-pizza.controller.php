<?php 


    require_once '../model/database.php';    

    $users = new user();
    $data = $users->getPizzas();
    
    if(isset($_POST['submit'])){
        session_start();
        $_SESSION["id"] = htmlspecialchars($_POST['id']);
        header('location:pizza.php');
    }


