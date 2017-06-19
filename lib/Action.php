<?php

class Action
{


    function __construct()
    {

        if (isset($_GET['name']) && isset($_GET['login']) && isset($_GET['password'])) {

            $Mysql = new Mysql();
            $Mysql->addNewUser($_GET['name'], $_GET['login'], $_GET['password']);
        }

        $Mysql = new Mysql();
        $Mysql->checkUserRegister();

    }
}

