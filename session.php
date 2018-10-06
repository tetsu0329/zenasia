<?php
session_start();

if (!isset($_SESSION['email'])) {
	
	 echo "Access Denied!";
	exit;
	// $idd = $_SESSION['email'];
	

} else {
	include 'connection.php';
	$email = $_SESSION['email'];
	$result = mysqli_query($connect, "SELECT * FROM accounts where email = '".$email."' ");
	while ($row = mysqli_fetch_array($result)) {

		$patientId = $row['patientId'];
		$image = $row['image'];
		$fullname = $row['fullname'];
		$email = $row['email'];
		$contact = $row['phone'];
		$address = $row['address'];
	}


}

?>
