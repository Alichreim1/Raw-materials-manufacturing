<?php

require_once 'db_connect.php';

session_start();
$username = $_SESSION['username'];
$quantity = $_POST['quantity'];
$materialname = $_POST['materialname'];

if (isset($_POST['remove'])){
    $quantity = $quantity * (-1);
}
//UPDATE `material` SET `quantity`=quantity WHERE `name`='caol'
// Define the query
$query = "UPDATE material SET quantity=quantity + $quantity WHERE name='$materialname'";
$result = mysqli_query($link, $query);


// Check if the query was successful
if ($result) {
   header("Location:dashboard.html");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($link);
}

mysqli_close($link);

