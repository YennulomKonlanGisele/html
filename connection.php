<?php
//code used to connect the php to a database in mysqli
$host="127.0.0.1";
$user="root";
$password="123";
$database_name="calculator";

$connect=mysqli_connect($host, $user, $password) or die("could not connect"); //line of code used to connect to databse
$select_database=mysqli_select_db($connect, $database_name) or die ("could not select database"); //line of code used to select the name of the database
?>
