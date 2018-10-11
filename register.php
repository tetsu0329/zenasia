<?php
    session_start();
    include('connection.php');
include('nav.php');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zen Asia | Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<link rel="stylesheet" type="text/css" href="mainstyles.css">
<style type="text/css">
    * {
        font-family: "Courier New" !important;

    }
    body{
        background-image: url("images/bg.jpg");
        background-size: cover !important;

    }
    .container1{
        padding: 2%;
    }
    .container2, .container3, .container4{
        float:left;
        width:100%;
        padding:0 8px;
    }

    .box{
        background: #fff;
        border-top: 10px solid #433124;
        padding:1%;
    }

    .wcontainer:after, .wcontainer:before{
        float:left;width:100%;
    }
    
.button{
  background: #b2d3a9 !important;
  color: #433124;
}
.button:hover{
  background: #433124 !important;
  color: #b2d3a9 !important;
}
.loginbox{
    padding:3%;
    margin: 3%;
    background: rgba(230, 255, 211,0.9);
    box-shadow: 3px 3px 15px 3px rgba(0,0,0,0.1);
}
input{
    background: transparent !important; 
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
    <div class="w3-main">
        <div class="container2">&nbsp;</div>
        <div class="container2">    
            <div class="loginbox">
                <br>
                <h6 style="font-size: 10px;">Zen Asia</h6>  
                <h4>Sign up with us ~</h4>
                <form action="" method="POST">
                    <p><input type="text" name="name" class="w3-input"><span style="font-size: 12px;">Fullname</span></p>
                    <p><input type="email" name="email" class="w3-input"><span style="font-size: 12px;">Email Address</span></p>
                    <p><input type="text" name="number" class="w3-input"><span style="font-size: 12px;">Contact Number</span></p>
                    <p><input type="text" name="address" class="w3-input"><span style="font-size: 12px;">Address</span></p>
                    <p><input type="password" name="password" class="w3-input"><span style="font-size: 12px;">Password</span></p>
                    <p><input type="text" name="gender" class="w3-input"><span style="font-size: 12px;">Gender</span></p>
                    <center><input type="submit" name="registerbtn" value="Register" class="w3-button button"><br>
                    <p>Already have an account? <a href="login.php"><b><i>Login here.</i></b></a></p></center>


                    </center>
                </form>
                
            </div>
        </div>
    </div>

  <!--   <form action="" method="POST">
        <label>Full Name: </label><input type="text" name="name"><br>
        <label>Email: </label><input type="email" name="email"><br>
        <label>Phone: </label><input type="text" name="number"><br>
        <label>Address: </label><input type="text" name="address"><br>
        <label>Password: </label><input type="password" name="password"><br>
        <label>Gender: </label><input type="text" name="gender"><br>
        <input type="submit" name="registerbtn" value="Register">
    </form> -->
</body>
</html>
<?php
    if(isset($_POST['registerbtn'])){
        $str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $shuffled = str_shuffle($str);
        $genratedID = substr($shuffled, 0, 8);
        $idd = $genratedID;
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['number'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];

        $query = mysqli_query($connect, "INSERT INTO accounts
        (patientId, fullname, email, phone, address, password, gender)
        VALUES ('$idd', '$name', '$email', '$phone', '$address', '$password', '$gender')")
        or die("failed to query database". mysqli_error());
        
        $_SESSION['email'] = $email;
        $_SESSION['cid'] = $idd;
        $_SESSION['cname'] = $name;
        echo "<script>alert('Registered Successfully');
        window.location.replace('appointment2.php');</script>";
        
    }
?>