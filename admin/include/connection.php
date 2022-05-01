<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "news";

$conn = mysqli_connect($dbhost , $dbuser , $dbpass , $dbname);

if(!isset($conn)){
    echo die("Database connection failed");
}
?>