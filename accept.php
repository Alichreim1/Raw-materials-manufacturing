<?php

//$username = $_POST['customerName'];
$order_id = $_POST['oid'];
//$prodname = $_POST['prodname'];

require_once 'db_connect.php';

// get productid
$query = "SELECT quantity,pid,pr_id FROM `orders` WHERE oid=$order_id";
$result = mysqli_query($link, $query);
$order = mysqli_fetch_assoc($result);
$order_quantity = $order['quantity'];
$userID = $order['pid'];
$productid = $order['pr_id'];
mysqli_free_result($result);

//// get userID
//$query = "SELECT pid FROM person where name = '".$username."'";
//$result = mysqli_query($link, $query);
//$pid = mysqli_fetch_assoc($result);
//$userID = $pid['pid'];
//mysqli_free_result($result);
//
// get productid
$query = "SELECT Pname FROM product where pr_id = '".$productid."'";
$result = mysqli_query($link, $query);
$pr_name = mysqli_fetch_assoc($result);
$prodname = $pr_name['Pname'];
mysqli_free_result($result);



// get material
$query = "SELECT material.Mcode as Mcode,prod_mat.quantity as pr_quantity,material.quantity as material_quantity FROM `prod_mat`
            JOIN material ON prod_mat.mat_id=material.Mcode where prod_mat.pr_id=$productid";
$result = mysqli_query($link, $query);

// Check if the query was successful
if (mysqli_num_rows($result) > 0) {
    // Output the data
    while ($row = mysqli_fetch_assoc($result)) {
        $Mcode = $row["Mcode"];
        $prod_mat_quantity =  $row["pr_quantity"];
        $material_quantity =  $row["material_quantity"];

        $quantity_used = $prod_mat_quantity * $order_quantity;
        $quantity_remained = $material_quantity - $quantity_used;

        echo "UPDATE material SET quantity = $quantity_remained WHERE Mcode= $Mcode";
        $query = "UPDATE material SET quantity = $quantity_remained WHERE Mcode= $Mcode";
        $add_result = mysqli_query($link, $query);

        echo "UPDATE orders SET status = 'Accepted' WHERE oid= $order_id";
        $query = "UPDATE orders SET status = 'Accepted' WHERE oid= $order_id";
        $status_result = mysqli_query($link, $query);
    }

    mysqli_free_result($result);
} else {

    header("Location: dashboard.html");
}
// Close the connection
mysqli_close($link);
header("Location: dashboard.html");
