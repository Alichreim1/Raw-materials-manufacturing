<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
        rel="stylesheet">       
        <link rel="stylesheet" href="./stylesheet.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&family=Orbitron:wght@400;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Monsieur+La+Doulaise&display=swap" rel="stylesheet">
        <script src="./Orders.js"></script>
        
        <script src="./index.js"></script>

        <script src="./Orders.js"></script>


</head>
<?php
$host="localhost";
$user="root";
$password="";
$db="database_material";

 $conn=mysqli_connect($host,$user,$password,$db);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());

}
 if ($conn -> connect_errno)
{
echo "Failed to connect to MySQL: " . $conn -> connect_error;
exit();
}

$sql = "select * from orders where status='Accepted' ";
$result = ($conn->query($sql));
//declare array to store the data of database
$row = []; 

if ($result->num_rows > 0) 
{
 // fetch all data from db into array 
 $row = $result->fetch_all(MYSQLI_ASSOC);  
}  

?>
<body>
    <div class="addproductPage">
    <aside id="sidebar">
        <div class="top">
            <div class="logo">
                <h4 id="A">A</h4>
                <h2 id="Alliance">Alliance</h2>
            </div>

            <!-- <div class="close" id="close-btn">
                <span class="material-icons-sharp">close</span>
            </div> -->

            <div class="menu" id="menu-btn">
                <span class="material-icons-sharp">menu</span>
            </div>
        </div>

        <div class="sidebar">
            <a href="./dashboard.html">
                <span class="material-icons-sharp">dashboard</span>
                <h3>Dashborad</h3>
            </a>
            <a href="./customers.php">
                <span class="material-icons-sharp">person_outline</span>
                <h3>Customers</h3>
            </a>
            <a href="./Employees.html">
                <span class="material-icons-sharp">contacts</span>
                <h3>Employees</h3>
            </a>
            <a href="./dashboard.html #Orders">
                <span class="material-icons-sharp">receipt_long</span>
                <h3>Orders</h3>
            </a>
           
            <a href="./dashboard.html #insights">
                <span class="material-icons-sharp">insights</span>
                <h3>Analytics</h3>
            </a>
            <a href="./inventory.php">
                <span class="material-icons-sharp">inventory</span>
                <h3>Inventory</h3>
            </a>
            <a href="./report.php">
                <span class="material-icons-sharp">report</span>
                <h3>Reports</h3>
                <span class="message-count">15</span>
            </a>
            
            
            <a href="./login.html">
                <span class="material-icons-sharp">logout</span>
                <h3>Logout</h3>
            </a>

        </div>
       

    </aside>
    <div class="InventoryMain">
        <div class="Table" id="Inventorytable">
            <div class="InventoryMainTop">
                 <h1>Report</h1>
                 
                <div class="right">
                    <div class="top">
                        <div id="theme">
                            <span class="material-icons-sharp active">light_mode</span>
                            <span class="material-icons-sharp">dark_mode</span>
                        </div>
                        <div class="profile">
                            <div class="info">
                                <p>Hey, <b>Ali</b></p>
                                <small class="tex-muted">Admin</small>
                            </div>
                            <div class="profile-pic">
                                <img src="profile.jpg" alt="admin profile photo">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <table  class="Table" id="Orders">
            <thead>
                                <tr>
                                    <th>order code</th>
                                    <th>product id</th>
                                    <th>user id</th>
                                    <th>quantity</th>
                                    <!-- <th>Status</th> -->
                                </tr>
                            </thead>
                            <tbody id="orderstablebody">
                        

                <?php 
               if(!empty($row))
                foreach($row as $rows)
                {
              
             ?>
             <tr>
  
                 <td><?php echo $rows['oid']; ?></td>
                <td><?php echo $rows['pid']; ?></td>
                <td><?php echo $rows['pr_id']; ?></td>
                <td><?php echo $rows['quantity']; ?></td>
                <?php } ?>
             </tr>  
                </tbody>
            </table>
            <a href="#">See More</a>

        </div>
    </div>
</div>
