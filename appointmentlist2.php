<?php
include 'nav.php'
?>
<!DOCTYPE html>
<html>
<head>
  <title>Appointment List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="mainstyles.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
  html, body,h1,h2,h3,h4,h5,h6{

    font-family: "Courier New";
  }
  a {
    text-decoration: none !important;
  }
  .container{
    max-width:980px;
    margin:auto
  }
  .container1{
    /*padding: 2%;*/
  }
  .container2, .container3, .container4{
    float:left;
    width:100%;
    padding:0 8px;
  }
  .wcontainer:after, .wcontainer:before{
    float:left;width:100%;
  }

  .ourserviceshome{
    background: #b2d3a9 !important;
    text-align: center;
    padding-top: 5%;
    padding-bottom: 2%;
  }

  .ourstoryhome{
    text-align: center;
    padding: 5%;
    background-image: url("images/storybg.jpg");
    background-size: cover;
    background-repeat: no-repeat;
  }
  .desc{
    line-height: 2;
    text-align: justify;
  }
  .box{
    background: rgba(255,255,255,0.5);
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
<div class="wrapper">

<!-- title  -->
  <div class=" w3-container ourserviceshome "><h2 class="title">APPOINTMENT LIST</h2></div>
<!-- gallery-->
<div class=" w3-container gallery">
  <br>
  <div class="container">
    <div class="columns">
    <div class="column" >
      <div id="calendar_div">
        <?php
        include 'appointmentlist.php'; // LIST OF APPOINTMENT
        ?>
      </div>
    </div>
  </div>
  </div>

</div>
</div>

</div>

<!-- scripts -->
<script src="jquery.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
</body>
</html>
<br>
<?php
include ('footer.php');
?>