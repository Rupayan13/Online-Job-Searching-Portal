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
        <form action="#" method="post">
            <label for="job_title">Job Title:</label>
            <input type="text" id="job_title" name="job_title" required>
            
            <label for="company">Company:</label>
            <input type="text" id="company" name="company" required>
            
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>
            
            <label for="start_date">Start Date:</label>
            <input type="text" id="start_date" name="start_date" placeholder="YYYY-MM-DD" required>
            
            <label for="end_date">End Date:</label>
            <input type="text" id="end_date" name="end_date" placeholder="YYYY-MM-DD">
            
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>
            
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
