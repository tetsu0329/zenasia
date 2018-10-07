<?php 
include 'session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css"> <!--- CSS FRAMEWORK -->
	<script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script> <!--- JS FRAMEWORK -->
</head>
<body>
	<?php include 'navigator.php'; ?>
	<div class="columns">
		<div class="column" >
			<div id="calendar_div">
				<?php
				include 'appointmentlist.php'; // LIST OF APPOINTMENT
				?>
			</div>
		</div>
	</div>
</body>
</html>