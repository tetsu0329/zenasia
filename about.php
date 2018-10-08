<?php
include 'nav.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>About</title>
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
	<div class=" w3-container ourserviceshome" style="padding:50px 16px;margin-top: 40px;"><h2 class="title">OUR STORY</h2></div>
<!-- about us -->
<div class=" w3-container ourstoryhome">
	<div class="box">
	<h5 class="desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.

	Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.</h5>
	</div>
</div>

</div>
</body>
</html>

<?php
include ('footer.php');
?>