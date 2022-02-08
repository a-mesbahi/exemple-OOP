<?php 


class db{
    private $serverName;
    private $userName;
    private $password;
    private $dbName;

    protected function connection(){
        $this->serverName = "localhost";
        $this->userName = "Amine";
        $this->password = "teste123";
        $this->dbName = "pizzas";

        $conn = new mysqli($this->serverName, $this->userName, $this->password, $this->dbName);
        return $conn;
    }
}


class user extends db{
    public function getPizzas(){
        $sql = "SELECT * FROM pizza";
        $result = $this->connection()->query($sql);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data ; 
    }
    public function setPizzas($name, $date, $elements ){
        $sql = "INSERT INTO pizza(createdBy,date, elements)
        VALUES ('$name', '$date', '$elements')";
        if(mysqli_query($this->connection(), $sql)){
            header('location:show-pizza.php');
        };
    }
}
class pizza extends db{
    public function selectPizza($id){
        $sql = "SELECT * FROM pizza WHERE id = $id";
        $result = $this->connection()->query($sql);
        $data = mysqli_fetch_assoc($result);
        return $data ;
    } 
    public function deletePizza($id){
        $sql = "DELETE FROM pizza WHERE id = $id";
        if(mysqli_query($this->connection(), $sql)){
            header('location:show-pizza.php');
        };
    }
}





