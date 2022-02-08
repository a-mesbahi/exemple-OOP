<?php 

    require_once '../controllers/make-pizza.controller.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/styleMake.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <h1>PIZZA ADD</h1>
        <a href="show-pizza.php">View Pizzas</a>
    </div>
    <div class="main">
        <div class="form-container">
            <form action="" method="post">
                <div class="inputs">
                        <label for="">User Name : </label>
                        <input type="text" name="username">
                    </div>
                    <div class="inputs">
                        <label for="">Date : </label>
                        <input type="date" name="date">
                    </div>
                    <div class="inputs">
                        <label for="">Elements : </label>
                        <input type="text" name="email">
                    </div>
                    <input type="submit" value="submit" class="submit" name="submit">
            </form>
        </div>
    </div>
    <footer class="footer">
            <h2>PIZZA MAKER</h2>
    </footer>
</body>
</html>