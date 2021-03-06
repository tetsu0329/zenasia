<?php include ("../admin/navigation.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Zen Asia | Accounts </title>
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
		text-align: left;
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
	.modalcont{
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
	<!-- !PAGE CONTENT! -->
	<div class="w3-main" style="margin-left:300px;margin-top:43px;">
		<div class="container1">
			<h1 class="title">ACCOUNTS | CUSTOMER</h1>
			<div class="container1" style="margin-top: 10px;">

	          <div class="wcontainer box">

	            <div class="tblresp">
	            	<!-- <button onclick="document.getElementById('add').style.display='block'"
								class="w3-button button" style="float: right;">ADD</button> -->

								<!-- The Modal -->
								<div id="add" class="w3-modal">
								  <div class="w3-modal-content">
								    <div class="w3-container modalcont">
								      <span onclick="document.getElementById('add').style.display='none'" 
								      class="w3-button w3-display-topright">&times;</span>
								      <h5>ADD USER</h5>
								      <hr>
								      <h6>Personal Information</h6>
								      <p><input type="text" name="lname" class="w3-input" placeholder="LASTNAME"></p>
								      <p><input type="text" name="fname" class="w3-input" placeholder="FIRSTNAME"></p>
								      <p><input type="text" name="number" class="w3-input" placeholder="CONTACT NUMBER"></p>	
								      <p><input type="text" name="email" class="w3-input" placeholder="EMAIL ADDRESS"></p>
								      <br>
								      <h6>Login Information</h6>
								      <p><input type="text" name="pword" class="w3-input" placeholder="PASSWORD"></p>
								      <p><input type="text" name="cpword" class="w3-input" placeholder="CONFIRM PASSWORD"></p>
								      <br><br>
								      <center><button class="w3-button button">ADD</button></center>
								    </div>
								  </div>
								</div>
	            	<br><br>
					<table class="table">
						<tr>
						  <th class="big">NAME</th>
						  <th><center>EMAIL ADDRESS</center></th>
						  <th><center>ACTIONS</center></th>
						</tr>
						<?php
							$users = mysqli_query($conn, "SELECT * FROM accounts WHERE type='' ");
							while($rows = mysqli_fetch_assoc($users)){

						?>
						<tr>
						  <td><?php echo $rows['fullname'] ?></td>
						  <td><?php echo $rows['fullname'] ?></td>
						  <td>
						  	<center>
								<a href="?ViewID=<?php echo $rows['id'] ?>"><button 
								class="w3-button button">VIEW</button></a>
						  	</center>

								<!-- The Modal -->
								<div id="view" class="w3-modal">
								<?php
										$idd = $_GET['ViewID'];
										$users2 = mysqli_query($conn, "SELECT * FROM accounts WHERE id = $idd");
										while($rows2 = mysqli_fetch_assoc($users2)){

									?>
								  <div class="w3-modal-content">
								    <div class="w3-container modalcont">
								      <span onclick="document.getElementById('view').style.display='none'" 
								      class="w3-button w3-display-topright">&times;</span>
								      <h5>VIEW USER</h5>
								      <hr>
								      <h5><b>FULLNAME:</b>&nbsp;<?php echo $rows2['fullname'] ?></h5>
								       <h5><b>EMAIL ADDRESS:</b>&nbsp;<?php echo $rows2['email'] ?></h5>
								        <h5><b>CONTACT NUMBER:</b>&nbsp;<?php echo $rows2['phone'] ?></h5>
								    </div>
								  </div>
									<?php
										}
									?>
								</div><br>
								<a href="?DeleteID=<?php echo $rows['id'] ?>"><button class="w3-button button">DELETE</button></a>
						  </td>
						</tr>
						<?php
							}
						?>
					</table>
					</div>
	          </div>
        	</div>

        	


		</div>	
	</div>

</div>
</body>
</html>
<?php
	if(isset($_GET['ViewID'])){
		echo "<script> var view_modal = document.getElementById('view'); </script>";
		echo "<script> view_modal.style.display = 'block' </script>";
	}
	if(isset($_GET['DeleteID'])){
		$messageID = $_GET['DeleteID'];
		$query = mysqli_query($conn,"UPDATE accounts SET type = 'deleted' WHERE id = $messageID")
			 or die ("failed to query database". mysqli_error());
			 echo"<script>
			 alert('Deleted Succesfully');
			 window.location.replace('acc_customer.php');</script>";
	}
?>