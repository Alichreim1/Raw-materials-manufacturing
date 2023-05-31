<?php
$host="localhost";
$user="root";
$password="";
$db="fproject";

$conn=mysqli_connect($host,$user,$password,$db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="select from customer where id=1 limit 1" ;
echo($sql);

// Close the connection
mysqli_close($conn);



