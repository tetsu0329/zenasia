<?php include ("../admin/navigation.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Zen Asia | Inquiry</title>
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
	textarea{
		resize: none;
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
			<h1 class="title">INQUIRY</h1>
			<div class="container1" style="margin-top: 10px;">

	          <div class="wcontainer box">
	            <div class="tblresp">
					<table class="table">
						<tr>
						  <th><center>INQUIRY NO.</center></th>
						  <th class="big"><center>SENDER</center></th>
						  <th><center>MESSAGE DATE</center></th>
						  <th class="big"><center>ACTIONS</center></th>
						</tr>
						<?php
							$inquiry = mysqli_query($conn, "SELECT * FROM inquiry");
							while($rows = mysqli_fetch_assoc($inquiry)){

						?>
						<tr>
						  <td><center>INQ-<?php echo $rows['id'] ?></center></td>
						  <td><?php echo $rows['name'] ?></td>
						  <td><center><?php echo $rows['date'] ?></center></td>
						  <td>
						  	<a href="?ViewID=<?php echo $rows['id'] ?>"><center><button class="w3-button button">VIEW</button></center></a>

								<!-- The Modal -->
								<div id="view" class="w3-modal">
									<?php
										$idd = $_GET['ViewID'];
										$inquiry2 = mysqli_query($conn, "SELECT * FROM inquiry where id = $idd");
										while($rows2 = mysqli_fetch_assoc($inquiry2)){

									?>
								  <div class="w3-modal-content">
								    <div class="w3-container modalcont">
								      <span onclick="document.getElementById('view').style.display='none'" 
								      class="w3-button w3-display-topright">&times;</span>
								      <h5>VIEW INQUIRY</h5>
								      <hr>
								      <h5><b>Sender:</b>&nbsp;<?php echo $rows2['name'] ?></h5>
								      <h5><b>Email Address:</b>&nbsp;<?php echo $rows2['email'] ?></h5>
								      <h5><b>Subject:</b>&nbsp;<?php echo $rows2['subject'] ?></h5>
								      <h5><b>Date:</b>&nbsp;<?php echo $rows2['date'] ?></h5>
								      <h5><b>Message:</b></h5>
								      <h5><?php echo $rows2['body'] ?></h5>
								    </div>
								  </div>
									<?php
										}
									?>
								</div>
								<br>
							<!-- <center><button onclick="document.getElementById('reply').style.display='block'" -->
								<!-- class="w3-button button">REPLY</button></center> -->

								<!-- The Modal -->
								<div id="reply" class="w3-modal">
								  <div class="w3-modal-content">
								    <div class="w3-container modalcont">
								      <span onclick="document.getElementById('reply').style.display='none'" 
								      class="w3-button w3-display-topright">&times;</span>
								      <h5>REPLY INQUIRY</h5>
								      <hr>
								      <h5><b>Reciepient:</b>&nbsp;Dummy email</h5>
								      <h5><b>Message:</b></h5>
								      <h5><textarea class="w3-input"></textarea></h5>
								      <br>
								      <center><button class="w3-button button">REPLY</button></center>
								    </div>
								  </div>
								</div>
								<br>
								<a onclick='javascript:confirmationDelete(this);return false;' href="?DeleteID=<?php echo $rows['id'] ?>"><center><button class="w3-button button">DELETE</button></center></a>
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
	<script>
		function confirmationDelete(anchor)
		{
			var conf = confirm('Are you sure want to delete this record?');
			if(conf)
					window.location=anchor.attr("href");
		}
		</script>
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
		$query = mysqli_query($conn,"DELETE FROM inquiry WHERE id = $messageID")
			 or die ("failed to query database". mysqli_error());
			 echo"<script>
			 alert('Deleted Succesfully');
			 window.location.replace('inquiry.php');</script>";
	}
?>