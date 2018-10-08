<?php 
	include ("../admin/navigation.php"); 
	include ("connection/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Zen Asia | CMS About Us</title>
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

	.aboutcont{
    border: 1px solid black;
    margin: 1%;
    padding: 5%;
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
			<h1 class="title">CONTENT MANAGEMENT | ABOUT US</h1>
			<div class="container1" style="margin-top: 10px;">

	          <div class="wcontainer box">
			  <?php
			  $query = mysqli_query($conn, "SELECT * FROM about");
			  $about = mysqli_fetch_assoc($query);
			  ?>
			  <form action="" method="POST">
	            	<textarea class="container1 aboutcont" style="width:1100px" name="body"><?php echo $about['body']?></textarea>
	            <center><input type="submit" name="submitbtn" class="w3-button button" value="SAVE"></center>
				</form>
	          </div>
        	</div>

        	


		</div>	
	</div>

</div>
</body>
</html>
<?php
if(isset($_POST['submitbtn'])){
	$messageID = $_POST['body'];
	$query = mysqli_query($conn,"UPDATE about SET body = '$messageID'")
		 or die ("failed to query database". mysqli_error());
		 echo"<script>
		 alert('About updated Succesfully');
		 window.location.replace('cms_aboutus.php');</script>";
}
?>