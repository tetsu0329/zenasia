<?php include ("../admin/navigation.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Zen Asia | CMS Contact</title>
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
	    padding: 20px;
	}
	.big{
		width: 80%;
	}

	.tblresp{
		display:block;
		overflow-x:auto;
	}

.button{
  background: #b2d3a9 !important;
  color: #433124;
}
.button:hover{
  background: #433124 !important;
  color: #b2d3a9 !important;
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
			<h1 class="title">CONTENT MANAGEMENT | CONTACT</h1>
			<div class="container1" style="margin-top: 10px;">

	          <div class="wcontainer box">
	            <div class="tblresp">
					<table class="table">
						<tr>
						  <th><center>CONTACT INFORMATION</center></th>
						  <th class="big">DETAILS</th>
						</tr>

						<tr>
						  <td><center>Contact Person</center></td>
						  <td><input type="text" name="contact" class="w3-input" placeholder="Dummy name"></td>
						</tr>

						<tr>
						  <td><center>Address</center></td>
						  <td><input type="text" name="contact" class="w3-input" placeholder="Dummy address"></td>
						</tr>
						
						<tr>
						  <td><center>Email Address</center></td>
						  <td><input type="text" name="contact" class="w3-input" placeholder="Dummy email"></td>
						</tr>

						<tr>
						  <td><center>Contact Number</center></td>
						  <td><input type="text" name="contact" class="w3-input" placeholder="123dummy"></td>
						</tr>

						<tr>
						  <td><center>Facebook</center></td>
						  <td><input type="text" name="contact" class="w3-input" placeholder="www.facebook.com/dummy"></td>
						</tr>

						<tr>
						  <td><center>Instagram</center></td>
						  <td><input type="text" name="contact" class="w3-input" placeholder="www.instagram.com/dummy"></td>
						</tr>

						<tr>
						  <td><center>Twitter</center></td>
						  <td><input type="text" name="contact" class="w3-input" placeholder="www.facebook.com/twitter"></td>
						</tr>
					</table>
					</div>
					<br>
					<center><button class="w3-button button">SAVE</button></center>
	          </div>
        	</div>

        	


		</div>	
	</div>

</div>
</body>
</html>