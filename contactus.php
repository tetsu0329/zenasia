<?php
include 'nav.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="mainstyles.css">
</head>
<style type="text/css">
	html, body,h1,h2,h3,h4,h5,h6{

		font-family: "Courier New";
	}
	.container{
		max-width:980px;
		margin:auto
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
		padding-top: 5%;
		padding-bottom: 2%;
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
	.contactbox{
		background: #e0ffd8;
		padding: 3%;
	}

	.contactbox2{
		background: #a9d19e;
		padding: 3%;
	}
	
	label{
		color: #0c3302;
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
</style>
<body>
<div class="wrapper">

<!-- title  -->
	<div class=" w3-container ourserviceshome"><h2 class="title">CONTACT US</h2></div>
<!-- gallery-->
<div class=" w3-container gallery">
	<br>
	<div class="container">
    	<div class="container2 contactbox">
    		<center>
	    		<a href="">Facebook</a>
	    		<a href="">Twitter</a>
	    		<a href="">Instagram</a>
    		</center>
    		<br>
    		<div class="container2">
    			<label>Contact Person</label><p>Dummy Name</p>
    		</div>

    		<div class="container2">
    			<label>Contact Address</label><p>Dummy address address address</p>
    		</div>

    		<div class="container2">
    			<label>Email Address</label><p>dummyemail@dummy.com</p>
    		</div>

    		<div class="container2">
    			<label>Contact Number</label><p>dummy123</p>
    		</div>
    	</div>

    	<div class="container2">
    		<h5>Leave us a message!</h5>
    	</div>


	</div>

</div>
</div>

</div>
</body>
</html>

<?php
include ('footer.php');
?>