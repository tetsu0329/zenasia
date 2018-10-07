<?php
include 'nav.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>Appointment</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="mainstyles.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 

  	<script>

  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#blah')
        .attr('src', e.target.result);
      };

      reader.readAsDataURL(input.files[0]);
    }
  }
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
      checked = document.getElementById('agree').checked;
      
    var selectTime = document.getElementById('time').value;
      if(selectTime == 'Select Time'){
          alert( "Select time");
          return false;
      }
      if(!checked) {
        alert( "You must select at least one service to appoint");
        alert( "Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy");
        return false;
      }

    });
  });

</script>
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

	#modal{
    display: none;
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
<div class="wrapper">

<!-- title  -->
	<div class=" w3-container ourserviceshome"><h2 class="title">APPOINTMENT</h2></div>
<!-- gallery-->
<div>
    <div class="columns">
      <div class="column is-half">
        <div style="padding-bottom: 10px;">
          <!-- <b class="has-text-info">Appointment</b> -->
          <?php include 'appoint.php'; ?>
        </div>
        <section class="info-tiles">
          <div class="tile is-ancestor has-text-centered">
            <div class="tile is-parent">
              <article class="tile is-child box">
                <h2 style="background: #2c3e50; padding: 10px; color: white; margin-bottom: 10px;">Set an appointment for next procedure</h2>
                <form enctype='multipart/form-data' onsubmit="if(document.getElementById('agree').checked) { return true; } else {
                  echo 'Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'; return false; }" method="POST" action="" autocomplete="off">
                  <input autocomplete="false" name="hidden" type="text" style="display:none;">
                  <div class="columns">
                    <div class="column">
                      <div class="columns">            
                        <div class="column">
                          <div class="field">
                            <label class="label">Therapist</label>
                            <div class="control">
                              <div class="select is-fullwidth">
                                <select name="personnel" required="">
                                  <option selected disabled="">Select Personnel</option>
                                  <option value="Personnel 1">Personnel 1</option>
                                  <option value="Personnel 2">Personnel 2</option>
                                  <option value="Personnel 3">Personnel 3</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="column" id="date">
                          <div class="field">
                            <label class="label">Select Date</label>
                            <div class="control has-icons-left">
                              <input class="input" name="dates" placeholder="Date" type="text" required="" id="datepicker">
                              <span class="icon is-small is-left">
                                <i class="fas fa-calendar"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="columns">
                        <div class="column">
                          <div class="field">
                            <label class="label">Select Time</label>
                            <div class="select">
                              <select name="hours" id="time" required>
                                <option selected disabled="">Select time</option>
                                <option value="3:00pm - 4:00 pm">3:00pm - 4:00 pm</option>
                                <option value="4:00pm - 5:00 pm">4:00pm - 5:00 pm</option>
                                <option value="5:00pm - 6:00 pm">5:00pm - 6:00 pm</option>
                                <option value="6:00pm - 7:00 pm">6:00pm - 7:00 pm</option>
                                <option value="7:00pm - 8:00 pm">7:00pm - 8:00 pm</option>
                                <option value="8:00pm - 9:00 pm">8:00pm - 9:00 pm</option>
                                <option value="9:00pm - 10:00 pm">9:00pm - 10:00 pm</option>
                                <option value="10:00pm - 11:00 pm">10:00pm - 11:00 pm</option>
                                <option value="11:00pm - 12:00 mn">11:00pm - 12:00 mn</option>
                                <option value="12:00mn - 1:00 am">12:00mn - 1:00 am</option>
                                <option value="1:00am - 2:00 am">1:00pm - 2:00 am</option>
                                <option value="2:00am - 3:00 am">2:00pm - 3:00 am</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="columns">
                    <div class="column" id="services">
                      <div class="field">
                        <label class="label has-text-left" style="padding: 0px 0px 20px 0px !important;">Select Service(s)</label>
                        <div class="control">
                          <?php
                          include 'connection.php';
                          $query = mysqli_query($connect, "SELECT * FROM services where status != 'archived'");
                          while ($row = mysqli_fetch_array($query)) {
                            echo "<div class='columns'><b>" . $row['title'] . "</b></div>";
                            $query_2 = mysqli_query($connect, "SELECT * FROM services_offered where category = '" . $row['title'] . "' ");
                            while ($row_2 = mysqli_fetch_array($query_2)) {

                              echo "<div class='columns' style=''>
                              <input type='checkbox' name='category[]' value='" . $row_2['title'] . "' style='padding: 5px; margin: 1%;'>" . $row_2['title'] . "</div>";

                            }
                          }
                          ?>
                        </div>
                      </div>
                      <div style="margin-top: 5%;">
                        <div class="field">
                          <div class="control">
                            <label class="checkbox">
                              <input type="checkbox" class="checkbox" id="agree">
                              I agree to the <a onclick="showModal(1)">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="field">
                        <input type="submit" id="checkBtn" class="file button is-primary" name="submit" value="Submit">
                      </div>
                    </div>
                  </div>
                </form>
              </article>
            </div>
          </div>
        </section>
      </div>

    </div>
  </div>
</div>

</div>


</body>
</html>
<div id="modal" class="modal">
  <div class="modal-background"></div>
  <div class="modal-content">
    <div class="modal-card animated fadeInDown">
      <section class="modal-card-body">
        SAMPLE TERMS AND CONDITION
      </section>
    </div>
  </div>
  <button class="modal-close is-large" onclick="showModal(null,2)" aria-label="close"></button>
</div>
<script>

  function showModal(show){
    if(show == 1){
      document.getElementById("modal").style.display = "block";
    } else {
      document.getElementById("modal").style.display = "none";
    }
  }
</script>
<br>
<?php
include ('footer.php');
?>