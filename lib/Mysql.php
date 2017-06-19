<?php

class Mysql
{
    public $host = 'localhost';
    public $mysql_user = 'root';
    public $password = '';
    public $datebase = 'test';
    public $tableUsers = 'users';
    public $link;

    //default constructor
    function __construct()
    {

        $this->link = mysqli_connect($this->host, $this->mysql_user, $this->password, $this->datebase);
        if (!$this->link) {
            die('Ошибка соединения: ' . mysqli_error() . PHP_EOL);
        }
       //echo 'Успешно соединились' . PHP_EOL;

    }

    // add new user
    public function addNewUser($name, $login, $password)
    {

        $sql = "INSERT INTO $this->tableUsers ( id, name, login, password) VALUES (1,'" . $name . "','" . $login . "','" . $password . "')";
        if (mysqli_query($this->link, $sql)) {
            echo "New record created successfully" . "<br>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->link) . PHP_EOL;
        }

    }
    // check registring status
    public function checkUserRegister(){
        $sql = "SELECT * FROM $this->tableUsers WHERE `id` = 1";
        $result = mysqli_query($this->link, $sql);
        $row = mysqli_num_rows($result);
         if ($row >= 1) {
             //User registred
           return true;
        } else {
             return false;
            //User non registred
        }
    }

    // check registring status
    public function updateUser($name,$login,$password){
        $sql = "UPDATE $this->tableUsers SET name= '". $name ."', login='" .$login. "', password= '".$password."' WHERE `id`=1";
        if ($this->link->query($sql) === TRUE) {
            echo "Record updated successfully"."<br>";
        } else {
            //echo "Error updating record: " . $this->link->error;
        }
    }
}

