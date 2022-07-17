<?php
require 'Message.php';
require 'ConnectionDB.php';
require 'connection.php';
$messages = new Message(ConnectionDB::connectionMysql($host, $dbname, $username, $password));