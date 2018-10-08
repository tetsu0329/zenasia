<?php
include ('session.php');
if (isset($_POST['submit'])) {
  include 'connection.php';
  $personnel = $_POST['personnel'];
  $date = $_POST['dates'];
  $hours = $_POST['hours'];
  $date_to_compare = date("Y-m-d", time() + 259200); //1 day later
  $ongoing = "pending";

  $check1 = mysqli_query($connect, "SELECT * FROM appointment WHERE email='$email' ");
  $checkrows1 = mysqli_num_rows($check1);

  $sql = mysqli_query($connect, "SELECT * FROM appointment WHERE dates = '$date' GROUP BY fullname");
  $check = mysqli_num_rows($sql);


  $check2 = mysqli_query($connect, "SELECT * FROM holiday WHERE (dates='$date' AND status = 'CLOSE')");
  $checkss = mysqli_num_rows($check2);


  $sqlss = mysqli_query($connect, "SELECT * FROM appointment where (hours = '$hours' AND dates = '$date' AND status = 'pending' AND personnel='$personnel' AND fullname = '$fullname')");
  $sqlssss = mysqli_num_rows($sqlss);

  $sqls = mysqli_query($connect, "SELECT * FROM appointment where (hours = '$hours' AND dates = '$date' AND status = 'validated')");
  $checks = mysqli_num_rows($sqls);

  if (empty($fullname) || empty($email)) {
    if (preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {
      echo 'Invalid Email.';
    }
  } else if ($checkss > 0) {

    echo "This date " . $date . " is not available!";
  } else if ($checks > 0) {
    echo "This hours " . $hours . " is not available for this date of " . $date . " ";
  } else if ($sqlssss > 0) {
    echo "You`re already set an appointment";

  } else if ($check > 6) {
    echo "This date " . $date . " is already taken!";

  } else if (strtotime($date_to_compare) > strtotime($date) || empty($hours)) {

    echo 'Invalid date/time of appointment!';
  } else {

    if (!empty($hours) || !empty($personnel)) {
      $str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $shuffled = str_shuffle($str);
      $genratedID = substr($shuffled, 0, 8);
      foreach ($_POST['category'] as $category) {
        $result = mysqli_query($connect, "INSERT INTO appointment (patientId,transacId,images,fullname,email,services,dates,hours,personnel,status) VALUES ('$patientId','$genratedID','null','$fullname','$email','$category','$date','$hours','$personnel','$ongoing')");
      }
      echo '<center>Your appointment <font color="red"><b>' . $fullname . '</b></font> has been sent.Please check your appointment through the e-mail address you used. Thank you!</center><br>';

      @$id = mysqli_insert_id($link);
      if ($result) {
        $to = $email;
        $subject = "Sample Appointment Summary";
        $Message = "
             <div style = 'padding:5px;border-right:32px solid lightblue;
             border-left:32px solid lightblue;
             border-top:5px solid lightblue;
             border-bottom:5px solid lightblue;
             margin-top:0px;
             margin-bottom:2px;
             margin-right:15px;
             margin-left:15px; 
             width: 470px;'>
             <p>Good Day Mr/Ms! <b>" . $fullname . "</b></p>
             <br>
  
             <div style = 'padding: 5px;'>
             <h2 style='background: #2c3e50; color: white; padding: 10px;'>Your basic information</h2>
             <div style='background: #eeeeee; color: white; padding: 10px;'>
             Name: <b>" . $fullname . "</b><br>
             Email: <b>" . $email . "</b><br>
             Date: <b>" . $date . "</b><br>
             Hours: <b>" . $hours . "</b><br>
             Services: <b>" . $category . "</b><br>
             Status: <b>" . $ongoing . "</b><br>
             </div>
             </div>
             ";

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: sample.com';
  
            //  echo (mail($to, $subject, $Message, $headers)) ? '' : 'SMTP error, Make it online' ;          
      } else {
        alert("There's an error while registration");
        header("location: appointment.php");
      }
    } else {
      echo "Some fields are required";
    }

  }
}
?>