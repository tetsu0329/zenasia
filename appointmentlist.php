
<!-- END NAV -->
<div style="padding: 1.1%;">
	<div class="columns">
		<div class="column">
			<div style="padding-bottom: 10px;">
				<b class="has-text-info"> Appointment List</b>
			</div>
			<section class="info-tiles">
				<div class="tile is-ancestor has-text-centered">
					<div class="tile is-parent">
						<article class="tile is-child box">
							<div class="columns">
								<div class="column is-half">
									<div class="field">
										<p class="control">
											<input type="text" id="myInput" class="input" onkeyup="myFunctionSearch()" placeholder="Search for Transac ID.." title="Type in a name">
										</p>
									</div>
								</div>
								<div class="column">
								</div>
								<div class="column">
									<div class="field">
										<p class="control">
											<div class="select">
												<select id="mySelect" onchange="myFunctionSelect()">
													<option value="Pending">Pending</option>
													<option value="Validated">Validated</option>
													<option value="Cancelled">Cancelled</option>
													<option value="Done">Done</option>
												</select>
											</div>
										</p>
									</div>
								</div>
							</div>
							<div style="overflow: auto;">  
								<table id="myTable" class="table is-responsive is-fullwidth is-hoverable">
									<thead>
										<tr>
											<th>Transac ID</th>
											<th>Fullname</th>
											<th>Service</th>
											<th>Date</th>
											<th>Time</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										include 'connection.php';
										$query = mysqli_query($connect, "SELECT patientId,transacId,images,hours,dates,GROUP_CONCAT(services) AS service,status,fullname  FROM appointment where patientId = '".$patientId."' GROUP BY fullname,dates,hours ");
										while ($row = mysqli_fetch_array($query)) {
											$image = $row['images'];
											echo "<tr>";
											echo "<td><b>".$row['transacId']."</b></td>";
											echo "<td>".$row['fullname']."</td>";
											echo "<td><b>".$row['service']."</b></td>";
											echo "<td>".$row['dates']."</td>";
											echo "<td>".$row['hours']."</td>";
											if($row['status'] == 'pending'){
												echo "<td><b style='color: firebrick'>Pending</b></td>";
											}else if($row['status'] == 'validated'){
												echo "<td><b style='color: green'>Validated</b></td>";
											}else if($row['status'] == 'cancelled'){
												echo "<td><b style='color: darkgoldenrod'><i class='fas fa-check'></i>Cancelled</b></td>";
											} else if($row['status'] == 'archived'){
												echo "<td><b>Done</b></td>";
											}
											if($row['status'] != 'cancelled'){
												echo "<td><a href='?id=".$row['transacId']."&date=".$row['dates']."'>Cancel?</a></td>";
											}else {
												echo "<td><b>No action availble</b></td>";
											}
											echo "</tr>";
										}
										?>
									</tbody>
								</table>
							</div>

						</article>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
<script>
	function showModal(image,show){
		if(show == 1){
			document.getElementById("myImg").src = "../" +image;
			document.getElementById("modal").style.display = "block";
		} else {
			document.getElementById("modal").style.display = "none";
		}
	}
	function myFunctionSearch() {
		var input, filter, table, tr, td, i;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		table = document.getElementById("myTable");
		tr = table.getElementsByTagName("tr");
		for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[0];
			if (td) {
				if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
					tr[i].style.display = "";
				} else {
					tr[i].style.display = "none";
				}
			}       
		}
	}
	function myFunctionSelect() {
		var input, filter, table, tr, td, i;
		input = document.getElementById("mySelect");
		filter = input.value.toUpperCase();
		table = document.getElementById("myTable");
		tr = table.getElementsByTagName("tr");
		for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[6];
			if (td) {
				console.log(filter,td.innerHTML)
				if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
					tr[i].style.display = "";
				} else {
					tr[i].style.display = "none";
				}
			}       
		}
	}

</script>

<?php
if (isset($_GET['id'])) {
	$date =  $_REQUEST['date'];
	$date = strtotime($date);
	$date = strtotime("-3 day", $date);
	$currentDate =  date("Y-m-d");
	$newDate = date('Y-m-d', $date);
	include 'connection.php';
	$query = mysqli_query($connect,"UPDATE appointment SET status = 'cancelled' where transacId = '".$_GET['id']."' ");
	if($query){
		echo '<script type=\'text/javascript\'>
		alert("Successfully Cancelled");
		window.location.replace("index.php");
		</script>';
	} else {
		echo '<script type=\'text/javascript\'>
		alert(No changes were made");
		window.location.replace("index.php");
		</script>';
	}
}
?>