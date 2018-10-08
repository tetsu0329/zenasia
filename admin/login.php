<?php
	session_start();
	if(!empty($_SESSION['zenadmin'])){
		echo "<script>window.location.replace('index.php')</script>";
	}
	include("connection/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Zen Asia | Login</title>
</head>
<link rel="stylesheet" href="../admin/styles.css">
<style type="text/css">
	body{
		background-image: url("images/bg.jpg");
		background-size: cover !important;
	}
	.container1{
		padding: 2%;
	}
	.container2, .container3, .container4{
		float:left;
		width:100%;
		padding:0 8px;
	}

	.box{
		background: #fff;
		border-top: 10px solid #433124;
		padding:5%;
	}

	.wcontainer:after, .wcontainer:before{
		float:left;width:100%;
	}
	
.button{
  background: #b2d3a9 !important;
  color: #433124;
}
.button:hover{
  background: #433124 !important;
  color: #b2d3a9 !important;
}
.loginbox{
	padding: 15%;
	margin: 10%;
	background: rgba(230, 255, 211,0.9);
	box-shadow: 3px 3px 15px 3px rgba(0,0,0,0.1);
}
input{
	background: transparent !important; 
}
@media (min-width:601px){
		.container2{
			width:49.99999%;
		}
		.container3{
			width:33.33333%;
		}
		.container4{
			width:24.99999%;
		}
}
</style>
<body>
	<div class="w3-main">
		<div class="container2">&nbsp;</div>
		<div class="container2">	
			<div class="loginbox">
				<br>
				<h6>Zen Asia</h6>	
				<h1>Admin Login</h1>
				<form action="" method="POST">
				<p><input type="text" name="uname" placeholder="Username" class="w3-input"></p>
				<p><input type="password" name="pword" placeholder="Password" class="w3-input"></p>
				<br><br>
				<center><input type="submit" class="w3-button button" value="LOGIN" name="loginbutton"></center>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php
if(isset($_POST['loginbutton']))
{

	$username = $_POST['uname'];
	$password = $_POST['pword'];
	$sqllogin = mysqli_query($conn,"SELECT * FROM admintable WHERE adminUsername='$username' AND adminPassword='$password'");
	
	$rowlog=mysqli_fetch_assoc($sqllogin);
	if($rowlog['adminStatus']=='Active')
	{
		$_SESSION['zenadmin']=$rowlog['id'];
		$_SESSION['adminName']=$rowlog['adminName'];
		echo "<script>window.location.replace('index.php')</script>";
	}
	else
	{
	echo "<script>alert('Username or Password is incorrect')</script>";
	}
}
?>