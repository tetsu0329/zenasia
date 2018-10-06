<?php include 'users.php'; ?>
<?php include '../contactFunction.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bulma.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script defer src="../js/all.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
  <script>
    $( function() {

      $("#datepicker").datepicker({
        minDate: 3,
        dateFormat: 'yy-mm-dd',
        beforeShowDay: function(date) {

          var day = date.getDay();
          return [(day != -1), ''];

        }
      });

    } );
    $(document).ready(function () {
      $('#checkBtn').click(function() {
        checked = $("input[type=checkbox]:checked").length;
        if(!checked) {
          swal("Failed!", "You must select at least one service to appoint", "error");
          swal("Failed!", "Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy", "error");
          return false;
        }

      });
    });

  </script>

</head>
<body>
  <?php include 'navigatorHome.php'; ?>
  <?php include 'navigator.php'; ?>
  <?php include 'count.php'; ?> 

  <!-- END NAV -->
  <div style="padding: 1.1%;">
    <div class="columns">
      <div class=" menu column is-3 " style="padding: 0 !important;">
          <?php include 'sidebar.php'; ?>
        </div>

        <div class="column is-half">
          <div style="padding-bottom: 10px;">
            <b class="has-text-info">Appointment</b>
          </div>
          <section class="info-tiles">
            <div class="tile is-ancestor has-text-centered">
              <div class="tile is-parent">
                <article class="tile is-child box">
                  <h2 style="background: #2c3e50; padding: 10px; color: white; margin-bottom: 10px;">Set an appointment for next procedure</h2>
                  <input autocomplete="false" name="hidden" type="text" style="display:none;">
                  <div class="columns">
                    <div class="column">
                      <div class="columns">
                        <div class="column">
                          <div class="field">
                            <label class="label">Doctor</label>
                            <div class="control">
                              <div class="select is-fullwidth">
                                <select name="doctor" onchange="selected(event.target.value)">
                                  <option selected disabled="">Select Doctor</option>
                                  <?php
                                  $query = mysqli_query($connect,"SELECT * FROM doctors");
                                  while ($row = mysqli_fetch_array($query)) {
                                      echo "<option value=".$row['doctorId'].">".$row['fullname']."</option>";
                                    
                                  } 
                                  ?>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <script>
                          function selected(value) {
                            window.location.replace('appointment?selectedDoctor='+value+'');
                            console.log(value)
                          }
                        </script>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </section>
        </div>
        <!--<div class="column is-half">-->
        <!--  <h1 class="title margin-10 margin-bottom-15">-->
        <!--    Contact Us-->
        <!--  </h1>-->
        <!--  <hr>-->
        <!--  <p>-->
        <!--    <b>Email:</b> <?php echo $email ?>-->
        <!--  </p>-->
        <!--  <p>-->
        <!--    <b>Tel #:</b> <?php echo $tel ?>-->
        <!--  </p>-->
        <!--  <p>-->
        <!--    <b>Address:</b> <?php echo $address ?>-->
        <!--  </p>-->
        <!--</div>-->
      </div>
    </div>
  <?php include '../footer.php' ?>
  </body>
  </html>