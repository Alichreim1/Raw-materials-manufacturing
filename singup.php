<!DOCTYPE html>

<html>
	
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="css\style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
    <style>
        body{
        	margin: 0 auto;
	background-image: url("../image/technology.jpg");
	background-repeat: no-repeat;
	background-size: 100% 720px;
}

.container{
	width: 500px;
	height: 450px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 160px;
}

.container img{
	width: 150px;
	height: 150px;
	margin-top: -60px;
}

input[type="text"],input[type="password"]{
	margin-top: 30px;
	height: 45px;
	width: 300px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 40px;
}

.form-input::before{
	content: "\f007";
	font-family: "FontAwesome";
	padding-left: 07px;
	padding-top: 40px;
	position: absolute;
	font-size: 35px;
	color: #2980b9; 
}

.form-input:nth-child(2)::before{
	content: "\f023";
}

.btn-login{
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
	color: #fff;
}
    </style>
	

</head>


<body>
<?php
	$host="localhost";
	$user="root";
	$password="";
	$db="database_material";
	
	 $conn=mysqli_connect($host,$user,$password,$db);
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());

	}
	if (isset($_POST['save'])){
		$firstname = $_POST['Name'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$numbphone = $_POST['numbphone'];
		$password = $_POST['password'];
		// $sql="INSERT INTO customer (name,gender,email,mobilenb,pass) Values ('$firstname','$gender','$email','$numbphone','$password')";
		$result = mysqli_query($conn,"insert into person values('','$firstname','$gender','$email','$numbphone','$password','user')");
		if($result){
			header("location: login.html");
		}

	    
        }
?>

<div class="container">
	<img src="profile.jpg"/>
		<form method="post"  action="#">
			<div class="form-input">
				<input type="text" name="Name" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="text" name="gender" placeholder="Enter gender"/>	
			</div>
			<div class="form-input">
				<input type="email" name="email" placeholder="Enter your email"/>	
			</div>
			<div class="form-input">
				<input type="number" name="numbphone" placeholder="Enter your phone number"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" name="save" value="Signup" class="btn-login"/>
		</form>
	</div>
	





</body>
</html>


