<?php
    $conn = mysqli_connect("localhost", "root", "", "db_appointment");


    $usersquery = mysqli_query($conn, "SELECT * FROM accounts");
    $user = mysqli_num_rows($usersquery);

    $appointmentquery = mysqli_query($conn, "SELECT * FROM appointment");
    $appointment = mysqli_num_rows($appointmentquery);

    $inquiryquery = mysqli_query($conn, "SELECT * FROM inquiry");
    $inquiry = mysqli_num_rows($inquiryquery);

    $servicesquery = mysqli_query($conn, "SELECT * FROM services");
    $services = mysqli_num_rows($servicesquery);
?>