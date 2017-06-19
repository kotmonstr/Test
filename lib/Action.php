<?php

// GRUD
class Action
{

    function __construct()
    {
        $Mysql = new Mysql();
        $statusRegister = $Mysql->checkUserRegister();
        $validate = $this->chekData();

        if ($validate == true && !$statusRegister) {
            //create
            $Mysql->addNewUser($_POST['name'], $_POST['login'], $_POST['password']);
        } elseif ($validate == true) {
            // update
            $Mysql->updateUser($_POST['name'], $_POST['login'], $_POST['password']);
        } else {
            //empty data
        }

    }

    // server validation
    private function chekData()
    {
        if(isset($_POST['name']) && isset($_POST['name']) !='' && isset($_POST['login']) && isset($_POST['login']) !='' && isset($_POST['password']) && isset($_POST['password']) !=''){
            return true;
        }else{
            return false;
        }
    }
}

