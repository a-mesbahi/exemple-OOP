<?php 
require_once '../model/database.php';
if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $date = htmlspecialchars($_POST['date']);
    $users = new user();
    $data = $users->setPizzas($name, $date, $email);
}
?>