<?php
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "schooldb";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) )
{
    die("failed to connect to database");
}

?>