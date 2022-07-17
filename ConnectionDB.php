<?php
require "connection.php";
class ConnectionDB
{
    public static function connectionMysql($host, $dbname, $username, $password)
    {
       return $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    }
}