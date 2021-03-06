<?php 
	include ("../admin/navigation.php"); 
	include ('connection/connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Zen Asia | Dashboard</title>
</head>
<style type="text/css">
	.container1{
		padding: 2%;
	}
	.container2, .container3, .container4{
		float:left;
		width:100%;
		padding:0 8px;
	}

	.title{
		text-transform: uppercase;
		font-weight: bold;
	}
	.box{
		background: #fff;
		border-top: 10px solid #433124;
		padding:10%;
	}

	.wcontainer:after, .wcontainer:before{
		float:left;width:100%;
	}
	
	.number{
		color: #66aa52;
		font-weight: bold;
		}
	.boxtitle{
		font-weight: bold;
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
	<!-- !PAGE CONTENT! -->
	<div class="w3-main" style="margin-left:300px;margin-top:43px;">
		<div class="container1">
			<h1 class="title">Dashboard</h1>
			<a href="acc_customer.php"><div class="container4" style="margin-top: 10px;">
	          <div class="wcontainer box">
	           <h1 class="number"><?php echo $user ?></h1>
	           <h2 class="boxtitle">Users</h2>
	          </div>
        	</div></a>

        	<a href="appointment.php"><div class="container4" style="margin-top: 10px;">
	          <div class="wcontainer box">
	           <h1 class="number"><?php echo $appointment ?></h1>
	           <h2 class="boxtitle">Appointment</h2>
	          </div>
        	</div></a>

        	<a href="inquiry.php"><div class="container4" style="margin-top: 10px;">
	          <div class="wcontainer box">
	           <h1 class="number"><?php echo $inquiry ?></h1>
	           <h2 class="boxtitle">Inquiry</h2>
	          </div>
        	</div></a>

        	<a href="#"><div class="container4" style="margin-top: 10px;">
	          <div class="wcontainer box">
	           <h1 class="number"><?php echo $services ?></h1>
	           <h2 class="boxtitle">Services</h2>
	          </div>
        	</div></a>


		</div>	
	</div>

</div>
</body>
</html>