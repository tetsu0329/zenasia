<?php 
include 'nav.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="mainstyles.css">
</head>
<style type="text/css">
	html, body,h1,h2,h3,h4,h5,h6{

		font-family: "Courier New";
	}
	.container1{
		/*padding: 2%;*/
	}
	.container2, .container3, .container4{
		float:left;
		width:100%;
		padding:0 8px;
	}
	.wcontainer:after, .wcontainer:before{
		float:left;width:100%;
	}

	.ourserviceshome{
		background: #b2d3a9 !important;
		text-align: center;
		padding: 5%;
	}

	.ourstoryhome{
		text-align: center;
		padding: 5%;
		background-image: url("images/storybg.jpg");
		background-size: cover;
		background-repeat: no-repeat;
	}
	.desc{
		line-height: 2;
		text-align: justify;
	}
	.box{
		background: rgba(255,255,255,0.5);
		padding: 5%;
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
<!-- header -->
	<div class="header"><img src="images/bg.jpg" width="100%;"></div>
<!-- our services -->
	<div class=" w3-container ourserviceshome">
			<h2 class="title">OUR SERVICES</h2>
			<br><br>
			<div class="wcontainer">	
				<div class="container4">
					<img src="images/bodymassage.png"><br><br>
					<h3>Body Massage</h3>
				</div>
			</div>

			<div class="wcontainer">	
				<div class="container4">
					<img src="images/bodytreat.png"><br><br>
					<h3>Body Treatment</h3>
				</div>
			</div>

			<div class="wcontainer">	
				<div class="container4">
					<img src="images/facial.png"><br><br>
					<h3>Facial Treatment</h3>
				</div>
			</div>

			<div class="wcontainer">	
				<div class="container4">
					<img src="images/hairremove.png"><br><br>
					<h3>Hair Removal</h3>
				</div>
			</div>
	</div>
<!-- about us -->
<div class=" w3-container ourstoryhome">
	<div class="box">
	<h2 class="title">OUR STORY</h2><br>
	<h5 class="desc">
	<?php
			  $query = mysqli_query($conn, "SELECT * FROM about");
			  $about = mysqli_fetch_assoc($query);
	echo $about['body'];		  
 	?>
	</h5>
	</div>
</div>

<!-- contact  -->
	<div class=" w3-container ourserviceshome">
			<h2 class="title">Pamper now! Enjoy hassle free appointment, <a href="appointment2.php"><i>book now!</i></a></h2>
			
	</div>
</body>
</html>

<?php
include ('footer.php');
?>