<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Experience Form</title>
    <link rel="stylesheet" href="./style/insert-job-experience.css">
</head>
<body>
    <header>
        <h1>Insert Job Experience</h1>
    </header>
    <div class="container">
        <form action="./insert-job-experience.php" method="post">
            <label for="job_title">Job Title:</label>
            <input type="text" id="job_title" name="job_title" required>
            
            <label for="company">Company:</label>
            <input type="text" id="company" name="company" required>
            
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>
            
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>
            
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>

<?php

include("./config.php");
if(isset($_POST['submit'])){
    $job_title=$_POST['job_title'];
    $company=$_POST['company'];
    $location=$_POST['location'];
    $description=$_POST['description'];

    $insertquery="insert into experience (jobtitle, company, location, description) values('$job_title', '$company', '$location', '$description')";
    $res=mysqli_query($con, $insertquery);
    if($res){
        header('location: ./blog.php');
    }else{
        ?>
        <script>
            alert("reminder is not inserted properly");
        </script>
        <?php
    }
}
?>