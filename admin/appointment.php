<?php 
	include ("../admin/navigation.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Zen Asia | Appointment</title>
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
			<h1 class="title">APPOINTMENT</h1>
			<div class="container1" style="margin-top: 10px;">

	          <div class="wcontainer box">
	            <div class="tblresp">
					<table class="table">
						<tr>
						  <th><center>TRANSACTION ID</center></th>
						  <th >FULLNAME</th>
						  <th ><center>SERVICE</center></th>
						  <th><center>DATE</center></th>
						  <th><center>TIME</center></th>
						  <th><center>STATUS</center></th>
						  <th><center>ACTION</center></th>
						</tr>
						<?php
							$query = mysqli_query($conn, "SELECT * FROM appointment");
							while($rows = mysqli_fetch_assoc($query)){

						?>
						<tr>
						  <td><center><?php echo $rows['transacId'] ?></center></td>
						  <td><?php echo $rows['fullname'] ?></td>
						  <td><center><?php echo $rows['services'] ?></center></td>
						  <td><center><?php echo $rows['dates'] ?></center></td>
						  <td><center><?php echo $rows['hours'] ?></center></td>
						  <td><center><?php echo $rows['status'] ?></center></td>
						  <td>
							<a href="?AppointID=<?php echo $rows['transacId'] ?>"><center><button class="w3-button button">CANCEL</button></center></a>
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
	if(isset($_GET['AppointID'])){
		$id2 = $_GET['AppointID'];
		$update = mysqli_query($conn, "UPDATE appointment SET status = 'cancelled' where transacId = '$id2'");
		echo "<script>alert('Transaction has been cancelled');
		window.location.replace('appointment.php');</script>";
	}
?>