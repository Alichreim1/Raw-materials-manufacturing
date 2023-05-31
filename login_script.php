<?php

require_once 'db_connect.php';


$username = $_POST['username'];
$password = $_POST['password'];

// Check username and password against database
$query = "SELECT * FROM person WHERE name='$username' AND pass='$password'";
// Execute the query
$result = mysqli_query($link, $query);

if (mysqli_num_rows($result) > 0) {

// Check username and password against database
    $query = "SELECT privilege FROM person WHERE name='$username' AND pass='$password'";
// Execute the query
    $priv = mysqli_query($link, $query);
    // Fetch the result as an associative array
    $row = mysqli_fetch_assoc($priv);
    // Print the value of the column
    echo $row['privilege'];
    // Free the result set
    mysqli_free_result($priv);

    echo "session starts \n";
    // Start a session
    session_start();
    // Store the user's information in a session variable
    $_SESSION['username'] = $username;
    // Redirect the user to the logged in page
    if ($row['privilege'] == "admin")
        header('Location: dashboard.html');
    else
        header('Location: userpage.php');
} else {
    // Display an error message
    echo "Invalid username or password";
}
// colse database connection
mysqli_close($link);

