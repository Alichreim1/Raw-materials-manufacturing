<?php

session_start();
$username = $_SESSION['username'];

require_once 'db_connect.php';

//get order table
$query = "SELECT person.name, orders.oid,product.Pname,orders.status 
            FROM orders 
            JOIN person  ON person.pid=orders.pid
            JOIN product ON product.pr_id=orders.pr_id";
$result = mysqli_query($link, $query);

// Check if the query was successful
if (mysqli_num_rows($result) > 0) {
    // Output the data
    echo "<thead>";
    echo "<tr>";
    echo "<th>Customer Name</th>";
    echo "<th>Order Number</th>";
    echo "<th>Product</th>";
    echo "<th>Status</th>";
    echo "<th>Admin decision</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["oid"] . "</td>";
        echo "<td>" . $row["Pname"] . "</td>";
        echo "<td>" . $row["status"] . "</td>";
        echo "<td> 
                <button type='button' class='buttonProcessing' data-value='". $row["oid"] ."' data-bs-toggle='offcanvas' 
                 data-bs-target='#demo'>Processing</button>
                 <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
                <script src=\"processing_opencanavas.js\"></script>
              </td>";
        echo "</tr>";
    }
    echo "</tbody>";
    // Free the result set
    mysqli_free_result($result);
} else {
    echo "<thead>";
    echo "<tr>";
    echo "<th>Customer Name</th>";
    echo "<th>Order Number</th>";
    echo "<th>Product</th>";
    echo "<th>Status</th>";
    echo "<th>Admin decision</th>";
    echo "</tr>";
    echo "</thead>";
}
//<form id='form' onsubmit=\"return processData()\">
//                    <input type='hidden' id='cu_name' name='customerName' value=". $row["name"] .">
//                    <input type='hidden' id='or_id' name='oid' value=". $row["oid"] .">
//                    <input type='hidden' id='pr_name' name='prodname' value=". $row["Pname"] .">
//                    <input type='submit' value='processing' class='edit_button' data-bs-toggle='offcanvas' data-bs-target='#demo'/>
//                </form>
//method='post' action='opencanavas.php'
// Close the connection
mysqli_close($link);
