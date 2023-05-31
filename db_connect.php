<?php


$host="localhost";
$db_user="root";
$db_password="";
$db="database_material";

$link = mysqli_connect($host, $db_user, $db_password, $db);

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}