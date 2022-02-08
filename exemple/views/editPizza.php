<?php 

    require_once '../controllers/edit.controller.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../assets/pizza-style.css" rel="stylesheet">
</head>
<body>
<header class="header">
        <h1 class="header_title">PizzA</h1>
        <div class="links">
            <a href="./make-pizza.php">Add pizza</a>
            <a href="./show-pizza.php">View Pizzas</a>
        </div>
    </header>
    <div class="form-container">
        <img src="../assets/pizza.png" alt="" class="deco">
        <form action="" class="form">
            <div class="inputs">
                <label for="">User Name : </label>
                <input type="text" name="username" value="<?= $pizza_edit['createdBy'];?>">
            </div>
            <div class="inputs">
                <label for="">Date : </label>
                <input type="date" name="date" value="<?= $pizza_edit['date'];?>">
            </div>
            <div class="inputs">
                <label for="">Elements : </label>
                <input type="text" name="email" value="<?= $pizza_edit['elements'];?>">
            </div>
            <button class="button-53" role="button">Edit</button>
        </form>
</body>
</html>