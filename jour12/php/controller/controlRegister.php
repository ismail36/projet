<?php

require_once "index.php";
require_once "register.php";
require_once "login.php";
require_once "welcomePage.php";
require_once "js.js";

$name = null;
$surname = null;
$email = null;
$pwd = null;
$cnfrm_pwd = null;

$infos = [$name, $surname, $email, $pwd, $cnfrm_pwd];

$name = $_REQUEST[nameJS];








?>