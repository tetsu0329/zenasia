<?php include ("../admin/navigation.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Zen Asia | CMS Gallery</title>
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
    border-top: 10px solid #1e90ff;
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

  .images{
    width: 100%;
  }

  .galcont{
    border: 1px solid black;
    margin: 1%;
  }
  .btncolorgreen{
    background: lightgreen;
  }
  .btncolorblue{
    background: lightblue;
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
</style>
<body>
  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px;margin-top:43px;">
    <div class="container1">
      <h1 class="title">CONTENT MANAGEMENT | GALLERY</h1>
      <div class="container1" style="margin-top: 10px;">

            <div class="wcontainer box">
              <button class="w3-button btncolorblue" style="float: right;">ADD</button><br><br>
             <div class="w3-row-padding w3-margin-bottom">
              <div class="container4">
                  <div class="container1 galcont">
                    <div class="w3-center">
                      <img src="images/zenlogo.png" class="images" >
                    </div>
                  </div>
              </div>

              <div class="container4">
                  <div class="container1 galcont">
                    <div class="w3-center">
                      <img src="images/zenlogo.png" class="images" >
                    </div>
                  </div>
              </div>

              <div class="container4">
                  <div class="container1 galcont">
                    <div class="w3-center">
                      <img src="images/zenlogo.png" class="images" >
                    </div>
                  </div>
              </div>

              <div class="container4">
                  <div class="container1 galcont">
                    <div class="w3-center">
                      <img src="images/zenlogo.png" class="images" >
                    </div>
                  </div>
              </div>
           </div>

           <center><button class="w3-button btncolorgreen">SAVE</button></center>
            </div>


          </div>

    </div>  
  </div>

</div>
</body>
</html>