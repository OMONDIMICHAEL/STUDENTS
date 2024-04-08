<?php
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "schooldb";

// if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) )
// {
//     die("failed to connect to database");
// }

$con = mysqli_connect ('localhost','root','','schooldb1');
if (mysqli_connect_errno()) {
    die ('failed to connect: ' . mysqli_connect_error());
}
?>