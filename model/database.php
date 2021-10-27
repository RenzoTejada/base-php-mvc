<?php

class Database
{

    public static function Conectar()
    {
        $environment = ENVIRONMENT;
        $db = array(
            'pro' => array(
                'hostname' => 'localhost',
                'database' => '',
                'username' => '',
                'password' => '',
                'port' => '3306',
            ),
            'local' => array(
                'hostname' => 'localhost',
                'database' => '',
                'username' => '',
                'password' => '',
                'port' => '3306',
            )
        );
        $pdo = new PDO('mysql:host=' . $db[$environment]['hostname'] . ';dbname=' . $db[$environment]['database'] . ';charset=utf8', $db[$environment]['username'],  $db[$environment]['password']);
        //Filtrando posibles errores de conexión.
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}
