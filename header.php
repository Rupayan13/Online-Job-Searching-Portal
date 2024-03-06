<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Searching Portal</title>
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>Welcome to the Job Searching Portal</h1>
    </header>
    <nav>
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./search-jobs.php">Search Jobs</a></li>
            <li><a href="./insert-job-experience.php">Post a Experience</a></li>
            <li><a href="./contact.php">Contact</a></li>
            <?php if(!isset($_SESSION['username'])){ ?>
                <li><a href="./login.php">Login</a></li>
                <li><a href="./registration.php">Register</a></li>
            <?php }else{ ?>
                <li><a href="./user-details.php?id=<?php echo $_SESSION['id']; ?>"><i class="fa-regular fa-user"></i> <?php echo $_SESSION['username']; ?></a></li>
                <li><a href="./logout.php">Logout</a></li>
            <?php } ?>
        </ul>
    </nav>