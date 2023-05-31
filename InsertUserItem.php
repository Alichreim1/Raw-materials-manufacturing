<?php

require_once 'db_connect.php';

session_start();
$username = $_SESSION['username'];
$quantity = $_POST['quantity'];
$prodname = $_POST['prodname'];
$status = $_POST['status'];

// Define the query
$query = "SELECT pid FROM person where name = '".$username."'";
$result = mysqli_query($link, $query);
$pid = mysqli_fetch_assoc($result);
mysqli_free_result($result);

// Define the query
$query = "SELECT pr_id FROM product where Pname = '".$prodname."'";
$result = mysqli_query($link, $query);
$pr_id = mysqli_fetch_assoc($result);
mysqli_free_result($result);

// Define the query
$query = "INSERT INTO orders (pid, pr_id,quantity,status) VALUES ('".$pid['pid']."', '".$pr_id['pr_id']."','$quantity', '$status')";
$result = mysqli_query($link, $query);

// Check if the query was successful
if ($result) {
    header('Location: userpage.php');
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($link);
}

mysqli_close($link);

