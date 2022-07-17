<?php
error_reporting(E_ALL & ~E_NOTICE);
require "include.php";

$errorEmail = '';
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL, FILTER_FLAG_EMAIL_UNICODE)) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        $messages->addMessage($name, $email, $message);
    }
    else {
        $text = "E-mail адрес '".$_POST['email']."' указан не верно.\n";
        $errorEmail = $text;

    }
    echo $errorEmail;

