<?php 
	include ("../admin/navigation.php"); 
	include ("connection/connection.php");
?>
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
}
</style>
<body>
	<!-- !PAGE CONTENT! -->
	<div class="w3-main" style="margin-left:300px;margin-top:43px;">
		<div class="container1">
			<h1 class="title">CONTENT MANAGEMENT | CONTACT</h1>
			<div class="container1" style="margin-top: 10px;">
			<?php
				$contact = mysqli_query($conn, "SELECT * FROM contact");
				$rows = mysqli_fetch_assoc($contact);
			?>
	          <div class="wcontainer box">
	            <div class="tblresp">
					<table class="table">
						<tr>
						  <th><center>CONTACT INFORMATION</center></th>
						  <th class="big">DETAILS</th>
						</tr>
						<form action="" method="POST">
						<tr>
						  <td><center>Contact Person</center></td>
						  <td><input type="text" name="person" class="w3-input" placeholder="Dummy name" value="<?php echo $rows['person'] ?>"></td>
						</tr>

						<tr>
						  <td><center>Address</center></td>
						  <td><input type="text" name="address" class="w3-input" placeholder="Dummy address" value="<?php echo $rows['address'] ?>"></td>
						</tr>
						
						<tr>
						  <td><center>Email Address</center></td>
						  <td><input type="text" name="email" class="w3-input" placeholder="Dummy email" value="<?php echo $rows['email'] ?>"></td>
						</tr>

						<tr>
						  <td><center>Contact Number</center></td>
						  <td><input type="text" name="contactnum" class="w3-input" placeholder="123dummy" value="<?php echo $rows['contactnum'] ?>"></td>
						</tr>

						<tr>
						  <td><center>Facebook</center></td>
						  <td><input type="text" name="fb" class="w3-input" placeholder="www.facebook.com/dummy" value="<?php echo $rows['fb'] ?>"></td>
						</tr>

						<tr>
						  <td><center>Instagram</center></td>
						  <td><input type="text" name="ig" class="w3-input" placeholder="www.instagram.com/dummy" value="<?php echo $rows['ig'] ?>"></td>
						</tr>

						<tr>
						  <td><center>Twitter</center></td>
						  <td><input type="text" name="tw" class="w3-input" placeholder="www.facebook.com/twitter" value="<?php echo $rows['tw'] ?>"></td>
						</tr>
					</table>
					</div>
					<br>
					<center><input type="submit" name="submitbtn" class="w3-button button" value="SAVE"></center>
	          </div>
        	</div>
					</form>
        	


		</div>	
	</div>

</div>
</body>
</html>
<?php
if(isset($_POST['submitbtn'])){
	$person = $_POST['person'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$contactnum = $_POST['contactnum'];
	$fb = $_POST['fb'];
	$ig = $_POST['ig'];
	$tw = $_POST['tw'];

	$query = mysqli_query($conn,"UPDATE contact SET person = '$person',
																								address = '$address',
																								email = '$email',
																								contactnum = '$contactnum',
																								fb = '$fb',
																								ig = '$ig',
																								tw = '$tw'")
		 or die ("failed to query database". mysqli_error());
		 echo"<script>
		 alert('Contact updated Succesfully');
		 window.location.replace('cms_contact.php');</script>";
}
?>