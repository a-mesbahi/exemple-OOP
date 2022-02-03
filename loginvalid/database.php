<?php 







class db{
    private $serverName;
    private $userName;
    private $password;
    private $dbName;

    public function connection(){
        $this->serverName = "localhost";
        $this->userName = "Amine";
        $this->password = "teste123";
        $this->dbName = "pizzas";

        $conn = new mysqli($this->serverName, $this->userName, $this->password, $this->dbName);
        return $conn;
    }
}


class user extends db{
    // function __construct()
    // {
    //     $name
    // }
    public function getPizzas(){
        $sql = "SELECT * FROM pizza";
        $result = $this->connection()->query($sql);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data ; 
    }
    public function setPizzas($name, $date, $elements ){
        $sql = "INSERT INTO pizza(createdBy,date, elements)
        VALUES ('$name', '$date', '$elements')";
        return $sql;
    }
}





