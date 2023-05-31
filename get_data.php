<?php

session_start();
$username = $_SESSION['username'];

require_once 'db_connect.php';

// get userID
$query = "SELECT pid FROM person where name = '".$username."'";
$result = mysqli_query($link, $query);
$pid = mysqli_fetch_assoc($result);
$userID = $pid['pid'];
mysqli_free_result($result);

//get order table
$query = "SELECT orders.oid,product.Pname,orders.quantity,orders.status 
            FROM orders 
            JOIN product 
            ON product.pr_id=orders.pr_id 
            WHERE pid = $userID";
$result = mysqli_query($link, $query);

// Check if the query was successful
if (mysqli_num_rows($result) > 0) {
    // Output the data
    echo "<thead>";
    echo "<tr>";
    echo "<th>Order ID</th>";
    echo "<th>Product Name</th>";
    echo "<th>Quantity</th>";
    echo "<th>Status</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["oid"] . "</td>";
        echo "<td>" . $row["Pname"] . "</td>";
        echo "<td>" . $row["quantity"] . "</td>";
        echo "<td>" . $row["status"] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    // Free the result set
    mysqli_free_result($result);
} else {
    echo "<thead>";
    echo "<tr>";
    echo "<th>Order ID</th>";
    echo "<th>Product Name</th>";
    echo "<th>Quantity</th>";
    echo "<th>Status</th>";
    echo "</tr>";
    echo "</thead>";
}

// Close the connection
mysqli_close($link);
