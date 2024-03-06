<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="./style/login-registration.css">
</head>
<body>
    <div class="container" id="register">
        <h2>Register</h2>
        <form action="./registration.php" method="post">
            <input type="text" name="fullname" placeholder="Full Name" required>
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="submit" value="Register">
        </form>
        <p style="text-align: center;">Already have an account? <a href="./login.php">Login</a></p>
    </div>
</body>
</html>

<?php

include("./config.php");
if(isset($_POST['submit'])){
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $insertquery="insert into user (fullname, email, password) values('$fullname', '$email', '$password')";
    $res=mysqli_query($con, $insertquery);
    if($res){
        header('location: ./login.php');
    }else{
        ?>
        <script>
            alert("reminder is not inserted properly");
        </script>
        <?php
    }
}
?>