<?php

require("./config.php");

$id = $_GET['id'];

$showquery="select * from user where id='$id'";

$showdata = mysqli_query($con, $showquery);

$arrdata = mysqli_fetch_array($showdata);

if(isset($_POST['submit'])){
    $idupdate = $id;
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $updatequery="update user set id='$id', fullname='$fullname', email='$email', password='$password' where id='$idupdate'";
    $res=mysqli_query($con, $updatequery);
    if($res){
        header("location: ./index.php");
    }else{
        ?>
        <script>
            alert("reminder is not modified properly");
        </script>
        <?php
    }
}
?>
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
        <form action="./edit-user.php?id=<?php echo $id; ?>;"  method="post">
            <input type="text" name="fullname" value="<?php echo $arrdata["fullname"]; ?>" placeholder="Full Name" required>
            <input type="text" name="email" value="<?php echo $arrdata["email"]; ?>" placeholder="Email" required>
            <input type="text" name="password" value="<?php echo $arrdata["password"]; ?>" placeholder="Password" required>
            <input type="submit" name="submit" value="Edit">
        </form>
    </div>
</body>
</html>