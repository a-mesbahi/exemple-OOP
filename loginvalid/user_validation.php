<?php 
    require_once 'database.php';
    $users = new user();
    $data = $users->getPizzas();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <h1 class="header_title">PIZZA</h1>
    </header>
    <div class="container">    
        <?php foreach($data as $doctor): ?>

            <div class="pizza-card">
                <p>
                    <strong>Created by:</strong>
                    <?= $doctor['createdBy'];?>
                </p>
                <p>
                    <strong>date:</strong>
                    <?= $doctor['date'];?>
                </p>
                <p>
                    <strong>Elements :</strong>
                    <?= $doctor['elements'];?>
                </p>
            </div>

        <?php endforeach;?>
    </div>
    <footer class="footer">
            <h2>PIZZA MAKER</h2>
    </footer>
</body>
</html>