  <?php
    session_start();
    include ("admin/connection/connection.php");
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="mainstyles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/css">
  * {
    font-family: "Courier New" !important;
  }
  .mynav{
    background: #66aa52;
  }
 
  .mynav a:hover{
    background: #b2d3a9 !important;
  }

  .mynavmobile{
    background: #b2d3a9 !important;
  }
  .mynavmobile a:hover{
    background: #b2d3a9 !important;
  }
  .isDisabled{
    pointer-events: none;
  }




  </style>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-card w3-left-align mynav">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large"><b>ZenAsia</b><i>Wellness</i></a>
    <div class="w3-right">
      <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large navlink">Home</a>
      <a href="about.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large navlink">About</a>
      <a href="gallery.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large navlink">Gallery</a>
      <a href="contactus.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large navlink">Contact Us</a>
      <a href="appointmentlist2.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large navlink">Appointment List</a>
      <a href="calendar2.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large navlink">Calendar</a>
      <a href="appointment2.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large navlink">Appointment</a>
      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large navlink isDisabled">|</a>
      <?php
        if(empty($_SESSION['cname'])){
      ?>
      <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large navlink">Login</a>
      <a href="register.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large navlink">Register</a>
      <?php
        }
        else{
    ?>
    <a href="#" class="w3-bar-item w3-button w3-padding-large navlink"><?php echo $_SESSION['cname'] ?></a>
    <?php
        }
    ?>
    </div>
    



  </div>  

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-hide w3-hide-large w3-hide-medium w3-large mynavmobile">
    <a href="#" class="w3-bar-item w3-button w3-padding-large navlink">Home</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large navlink">About</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large navlink">Gallery</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large navlink">Contact Us</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large navlink">Appointment List</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large navlink">Calendar</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large navlink">Appointment</a>
    <hr>
    <?php
        if(empty($_SESSION['cname'])){
    ?>
    <a href="#" class="w3-bar-item w3-button w3-padding-large navlink">Login</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large navlink">Register</a>
    <?php
        }
        else{
    ?>
    <a href="#" class="w3-bar-item w3-button w3-padding-large navlink"><?php echo $_SESSION['cname'] ?></a>
    <?php
        }
    ?>
  </div>
</div>


<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>