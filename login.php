<?php
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Zen Asia | Login</title>
</head>
<link rel="stylesheet" type="text/css" href="mainstyles.css">
<style type="text/css">
	* {
		font-family: "Courier New" !important;
	}
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
			<form action="" method="POST">
				<br>
				<h6 style="font-size: 10px;">Zen Asia</h6>	
				<h4>Sign in to your Account ~</h4>
				<p><input type="text" name="uname" placeholder="Email" class="w3-input"></p>
				<p><input type="password" name="pword" placeholder="Password" class="w3-input"></p>
				<br><br>
				<center><input type="submit" name="loginbtn" class="w3-button button" value="LOGIN"></center>
			</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php
if(isset($_POST['loginbtn'])){
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];

    $result = mysqli_query($connect,"SELECT * FROM accounts WHERE email = '$uname' AND password = '$pword'")
            or die ("failed to query database". mysqli_error());
    $results = mysqli_fetch_assoc($result);
    $numrows = mysqli_num_rows($result);
    if($numrows==1){
		$_SESSION['cname'] = $results['fullname'];
		$_SESSION['email'] = $results['email'];
		$email = $results['email'];
        $_SESSION['cid'] = $results['id'];
        echo"<script type='text/javascript'>alert('Login Successful'); 
        window.location='appointment2.php';
        </script>";
    }
    else{
		// echo "<script> var view_incorrect = document.getElementById('incorrect'); </script>";
		// echo "<script> view_incorrect.style,display='block'; </script>";
        echo"<script type='text/javascript'>alert('Incorrect username or password'); 
        window.location='login.php';
        </script>";
    }
}
?>