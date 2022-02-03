<?php 
require_once 'database.php';
if(isset($_POST['submit'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $users = new user();
    $data = $users->setPizzas($name, $date, $email);
    if(mysqli_query($users->connection(), $data)){
        header('location:user_validation.php');
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styleMake.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <h1>PIZZA ADD</h1>
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