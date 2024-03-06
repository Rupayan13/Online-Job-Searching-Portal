<?php
session_start();
?>
<?php
include("./config.php");
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $username_search ="select * from user where fullname='$username'";
    $query = mysqli_query($con, $username_search);

    $username_count=mysqli_num_rows($query);

    if($username_count){
        $user_pass = mysqli_fetch_assoc($query);

        $db_pass=$user_pass['password'];

        $_SESSION['username'] = $user_pass['fullname'];
        $_SESSION['id'] = $user_pass['id'];

        // $pass_decode = password_verify($password, $db_pass);
        if($password==$db_pass){
            echo "login successful";
            header('location: index.php');
        }
        else{
            header('location: login.php');
        }
    }
    else{
        header('location: login.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style/login-registration.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="#" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="submit" value="Login">
        </form>
        <div class="separator">or</div>
        <p style="text-align: center;">Don't have an account? <a href="./registration.php">Register</a></p>
    </div>
</body>
</html>
