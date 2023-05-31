<?php

$prodname = $_POST['prodname'];
$order_quantity = $_POST['pr_quantity'];

require_once 'db_connect.php';
// get productid
$query = "SELECT pr_id FROM product where Pname = '".$prodname."'";
$result = mysqli_query($link, $query);
$product = mysqli_fetch_assoc($result);
$productid = $product['pr_id'];
mysqli_free_result($result);



// get material
$query = "SELECT material.name,prod_mat.quantity as pr_quantity,material.cost,material.quantity as material_quantity 
            FROM `prod_mat`
            JOIN material ON prod_mat.mat_id=material.Mcode where prod_mat.pr_id=$productid";
$result = mysqli_query($link, $query);

// Check if the query was successful
if (mysqli_num_rows($result) > 0) {
    // Output the data
    $total_price = 0;
    echo "<h1>$prodname:";
    echo "</h1><br/>";
    while ($row = mysqli_fetch_assoc($result)) {
        $material_name =  $row["name"];
        $prod_mat_quantity =  $row["pr_quantity"];
        $material_quantity =  $row["material_quantity"];
        $material_cost =  $row["cost"];

        $quantity_used = $prod_mat_quantity * $order_quantity;
        $quantity_remained = $material_quantity - $quantity_used;
        $material_price = $quantity_used * $material_cost ;
        $total_price = $total_price + $material_price;

        echo "<h1>$material_name:</h1>";
        echo "<h3>quantity used:$quantity_used</h3><br/>";
        echo "<h3>quantity remained:$quantity_remained</h3><br/>";
        echo "<h3>Total price: $material_price $</h3><br/>";
    }

    echo "<h2>Total price: $total_price $</h2>";

    mysqli_free_result($result);
} else {
    echo "<h1>$prodname:";
    echo "</h1><br/>";
}

// Close the connection
mysqli_close($link);
