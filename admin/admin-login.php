<?php
session_start();
?>
<?php
include("../config.php");
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $username_search ="select * from adminlogin where username='$username'";
    $query = mysqli_query($con, $username_search);

    $username_count=mysqli_num_rows($query);

    if($username_count){
        $user_pass = mysqli_fetch_assoc($query);

        $db_pass=$user_pass['password'];

        $_SESSION['username'] = $user_pass['username'];

        // $pass_decode = password_verify($password, $db_pass);
        if($password==$db_pass){
            echo "login successful";
            header('location: index.php');
        }
        else{
            header('location: loginfailed.php');
        }
    }
    else{
        header('location: loginfailed.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Login</title>
    <link rel="stylesheet" href="../style/admin-login.css">
</head>
<body>
    <div class="login-container">
        <h2>Admin Panel Login</h2>
        <form action="./admin-login.php" method="post" id="loginForm">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>
</html>
