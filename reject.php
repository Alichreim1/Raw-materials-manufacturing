<?php


$order_id = $_POST['oid'];


require_once 'db_connect.php';

$query = "UPDATE orders SET status = 'Rejected' WHERE oid= $order_id";
$status_result = mysqli_query($link, $query);

// Close the connection
mysqli_close($link);

header("Location: dashboard.html");
