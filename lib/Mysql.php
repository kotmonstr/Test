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

        $sql = "INSERT INTO $this->tableUsers ( name, login, password) VALUES ('" . $name . "','" . $login . "','" . $password . "')";
        if (mysqli_query($this->link, $sql)) {
            echo "New record created successfully" . PHP_EOL;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->link) . PHP_EOL;
        }

    }
}

