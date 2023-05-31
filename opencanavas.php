<?php


$order_id = $_POST['oid'];


require_once 'db_connect.php';

// get productid
$query = "SELECT quantity,pid,pr_id FROM `orders` WHERE oid=$order_id";
$result = mysqli_query($link, $query);
$order = mysqli_fetch_assoc($result);
$order_quantity = $order['quantity'];
$userID = $order['pid'];
$productid = $order['pr_id'];
mysqli_free_result($result);


// get productid
$query = "SELECT Pname FROM product where pr_id = '".$productid."'";
$result = mysqli_query($link, $query);
$pr_name = mysqli_fetch_assoc($result);
$prodname = $pr_name['Pname'];
mysqli_free_result($result);



// get material
$query = "SELECT material.name,prod_mat.quantity as pr_quantity,material.cost,material.quantity as material_quantity FROM `prod_mat`
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
    echo "<br/>";
    echo "<form method='post'  action='accept.php' style='display:inline-block; margin-right: 50px'>
            <input type='hidden' name='oid' value='$order_id'>
			<input type='submit' name='submit' value='Accept' class='btn btn-success'/>
		</form>";
    echo "<form method='post'  action='reject.php' style='display:inline-block;'>
            <input type='hidden' name='oid' value='$order_id'>
			<input type='submit' name='submit' value='Reject' class='btn btn-success'/>
		</form>";

    mysqli_free_result($result);
} else {
    echo "<h1>$prodname:";
    echo "</h1><br/>";
}

// Close the connection
mysqli_close($link);
