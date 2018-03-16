<?php 

/*
File Name: connection.php
Date: 02/25/18
Programmer: Janice Bradford
Project: Ace in the Hole Multisport Events
*/

//define("DB_SERVER", "127.0.0.1");
define("DB_SERVER", "localhost");
define("DB_USER", "janicebr_multisportevents");
define("DB_PASSWORD", "aceinthehole");
define("DB_NAME", "janicebr_multisportevents");

$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
} else 
    //echo "1. database connection succeeded.<br>"

?>