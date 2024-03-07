<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: login.php");
}
?>
<?php
require("./config.php");
$id = $_GET['id'];
$showquery="select * from experience where id='$id'";
$showdata = mysqli_query($con, $showquery);
$arrdata = mysqli_fetch_array($showdata);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Experience</title>
    <link rel="stylesheet" href="./style/user-details.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>User Experience</h1>
    </header>

    <div class="container">
        <div class="profile-details">
            <div>
                <h2><?php echo $arrdata['jobtitle']; ?></h2>
                <p><?php echo $arrdata['company']; ?></p>
                <p><?php echo $arrdata['location']; ?></p>
                <p>Interview Experience:</p>
                <p><?php echo $arrdata['description']; ?></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
