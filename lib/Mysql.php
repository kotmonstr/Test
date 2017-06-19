<?php

class Mysql
{
    public $host = 'localhost';
    public $mysql_user = 'root';
    public $password = '';
    public $datebase = 'test';
    public $tableUsers = 'users';
    public $link;

    function __construct()
    {

        $this->link = mysqli_connect($this->host, $this->mysql_user, $this->password, $this->datebase);
        if (!$this->link) {
            die('Ошибка соединения: ' . mysqli_error() . PHP_EOL);
        }
        echo 'Успешно соединились' . PHP_EOL;

    }

    public function addNewUser($name, $login, $password)
    {

        $sql = "INSERT INTO $this->tableUsers ( id, name, login, password) VALUES (1,'" . $name . "','" . $login . "','" . $password . "')";
        if (mysqli_query($this->link, $sql)) {
            echo "New record created successfully" . PHP_EOL;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->link) . PHP_EOL;
        }

    }
    public function checkUserRegister(){
        $sql = "SELECT * FROM $this->tableUsers WHERE 'id' = 1";
        $result = mysqli_query($this->link, $sql);
        

        print_r($result);exit();

        if (isset($sql)) {

            echo "allready registred" . PHP_EOL;
        } else {
            echo "non registred" . PHP_EOL;
        }
    }
}

