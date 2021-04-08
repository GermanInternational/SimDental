<?php


class Conexion extends PDO
{

    public function __construct($dsn = "mysql:dbname=dentist;host=127.0.0.1", $username = "root", $passwd = "")
    {
        parent::__construct($dsn, $username, $passwd, [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);
    }

}