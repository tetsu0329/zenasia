<?php include ("../admin/navigation.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Zen Asea | CMS Home</title>
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
		padding:5%;
	}

	.wcontainer:after, .wcontainer:before{
		float:left;width:100%;
	}
	
	.number{
		color: #1e90ff;
		font-weight: bold;
		}
	.boxtitle{
		color: #000;
		font-weight: bold;
	}

	.table{
		border-collapse:
		collapse;border-spacing:0;
		width:100%;
		display:table;
		border:1px solid #ccc
		}
	}
	table {
    border-collapse: collapse;
	}

	table, th, td {
	    border: 1px solid black;
	}
	.big{
		width: 80%;
	}

	 .btncolorgreen{
    background: lightgreen;
  }
  .btncolorblue{
    background: lightblue;
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
	<!-- !PAGE CONTENT! -->
	<div class="w3-main" style="margin-left:300px;margin-top:43px;">
		<div class="container1">
			<h1 class="title">CONTENT MANAGEMENT | HOME</h1>
			<div class="container1" style="margin-top: 10px;">

	          <div class="wcontainer box">
	            <div class="w3-responsive">
					<table class="table">
						<tr>
						  <th class="big"><center>LOGO</center></th>
						  <th><center>ACTIONS</center></th>
						</tr>
						<tr>
						  <td><center><img src="images/zenlogo.png" width="50%;"></center></td>
						  <td><center>
						  	<button class="w3-button button">UPLOAD</button><br><br>
						  	<button class="w3-button button">SAVE</button>
						  </center></td>
						</tr>
					</div>
	          </div>
        	</div>

        	


		</div>	
	</div>

</div>
</body>
</html>