<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: admin-login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../style/admin-index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <?php include("./sidebar.php"); ?>
    <?php
    require("../config.php");
    $showuserquery="select count(*) as u from user";
    $user_show = mysqli_query($con, $showuserquery);
    $user = mysqli_fetch_array($user_show);
    $showjobquery="select count(*) as j from jobopening";
    $job_show = mysqli_query($con, $showjobquery);
    $job = mysqli_fetch_array($job_show);
    ?>
    <div class="main-content">
        <h1>Admin Panel - Dashboard</h1>
        <div class="content">
            <div class="dashboard-stats">
                <div class="stat-box">
                    <h2>Total Users</h2>
                    <p><?php echo $user['u']; ?></p>
                </div>
                <div class="stat-box">
                    <h2>Total Jobs</h2>
                    <p><?php echo $job['j']; ?></p>
                </div>
            </div>
            <!-- Additional dashboard content goes here -->
        </div>
    </div>
    
</body>
</html>
