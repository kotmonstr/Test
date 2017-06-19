<?php

class Action
{


    function __construct()
    {

        if (isset($_POST['name']) && isset($_POST['login']) && isset($_POST['password'])) {

            $Mysql = new Mysql();
            $Mysql->addNewUser($_POST['name'], $_POST['login'], $_POST['password']);
        }


    }
}

