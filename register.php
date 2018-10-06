<?php
    session_start();
    include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="" method="POST">
        <label>Full Name: </label><input type="text" name="name"><br>
        <label>Email: </label><input type="email" name="email"><br>
        <label>Phone: </label><input type="text" name="number"><br>
        <label>Address: </label><input type="text" name="address"><br>
        <label>Password: </label><input type="password" name="password"><br>
        <label>Gender: </label><input type="text" name="gender"><br>
        <input type="submit" name="registerbtn" value="Register">
    </form>
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
        echo "<script>alert('Registered Successfully');
        window.location.replace('appointment.php');</script>";
        
    }
?>