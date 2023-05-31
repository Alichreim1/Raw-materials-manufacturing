<?php 

$host="localhost";
$user="root";
$password="";
$db="building";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['text'])){
    
    $uname=$_POST['text'];
    $password=$_POST['password'];
    
    $sql="select * from admin where Name='".$uname."'AND password='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>