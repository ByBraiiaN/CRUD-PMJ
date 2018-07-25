<?php
    require "config.php";

    function conectar(){
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $mysqli->set_charset("utf8");

        if($mysqli->connect_error){
            die('Error de conexión: '.$mysqli->connect_error);
        } else {
            return $mysqli;
        }
    }