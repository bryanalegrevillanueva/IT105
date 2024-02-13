<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "";


if(!$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname))
{

    die("Connection error! please connect to the internet.");

}

?>