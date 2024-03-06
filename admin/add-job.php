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
    <title>Add Job Opening</title>
    <link rel="stylesheet" href="../style/add-job.css">
</head>
<body>
    <div class="container">
        <h2>Add Job Opening</h2>
        <form action="./add-job.php" method="post">
            <div class="form-group">
                <label for="jobTitle">Job Title:</label>
                <input type="text" id="jobTitle" name="jobTitle" required>
            </div>
            <div class="form-group">
                <label for="jobDescription">Job Description:</label>
                <textarea id="jobDescription" name="jobDescription" required></textarea>
            </div>
            <div class="form-group">
                <label for="jobRequirements">Job Requirements:</label>
                <textarea id="jobRequirements" name="jobRequirements" required></textarea>
            </div>
            <div class="form-group">
                <label for="jobLocation">Job Location:</label>
                <input type="text" id="jobLocation" name="jobLocation" required>
            </div>
            <div class="form-group">
                <label for="$jobLink">Job Link:</label>
                <input type="text" id="jobLink" name="jobLink" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>

<?php

include("../config.php");
if(isset($_POST['submit'])){
    $jobTitle=$_POST['jobTitle'];
    $jobDescription=$_POST['jobDescription'];
    $jobRequirements=$_POST['jobRequirements'];
    $jobLocation=$_POST['jobLocation'];
    $jobLink=$_POST['jobLink'];

    $insertquery="insert into jobopening (jobtitle, jobdescription, jobrequirements, joblocation, link) values('$jobTitle', '$jobDescription', '$jobRequirements', '$jobLocation', '$jobLink')";
    
    $res=mysqli_query($con, $insertquery);
    if($res){
        header('location: ./index.php');
    }else{
        ?>
        <script>
            alert("Job is not inserted properly");
        </script>
        <?php
    }
}
?>