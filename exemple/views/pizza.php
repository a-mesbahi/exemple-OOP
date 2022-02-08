<?php 
require_once '../controllers/pizza.controller.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/pizza-style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <h1 class="header_title">PizzA</h1>
        <div class="links">
            <a href="make-pizza.php">Add pizza</a>
            <a href="show-pizza.php">View Pizzas</a>
        </div>
    </header>
    <!-- <div class="popUp-cotainer">
        <div class="form-container">
            <form action=""></form>
        </div>
    </div> -->
    <div class="container">
        <div class="card">
            <div class="pic">
            </div>
            <div class="contenu">
                <p>
                    <strong>Created by:</strong>
                        <?= $data['createdBy'];?>
                </p>
                <p>
                    <strong>date:</strong>
                    <?= $data['date'];?>
                </p>
                <p>
                    <strong>Elements :</strong>
                    <?= $data['elements'];?>
                </p>
            </div>
            <form action="" method="POST">
                <button class="button-52" role="button" name="delete">DELETE</button>
                <br><br><br>
                <a class="button-52 edit" role="button" href="editPizza.php" name="edit">EDIT</a>
                <input type="hidden" value="<?= $data['id'];?>">
            </form>
        </div>
    </div>
    
</body>
</html>