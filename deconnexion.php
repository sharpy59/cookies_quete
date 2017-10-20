<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 20/10/17
 * Time: 12:19
 */
session_start();
session_destroy();
unset($_COOKIE['name46']);
unset($_COOKIE['name36']);
unset($_COOKIE['name58']);
unset($_COOKIE['name32']);
setcookie('name46',null,-1);
setcookie('name36',null,-1);
setcookie('name58',null,-1);
setcookie('name32',null,-1);
header('location: index.php');

