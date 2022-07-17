<?php
error_reporting(E_ALL & ~E_NOTICE);
require "include.php";

$getMessages = $messages->getMessage();

include "views/index.show.php";