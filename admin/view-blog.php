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
    <title>User Management</title>
    <link rel="stylesheet" href="../style/user.css">
    <link rel="stylesheet" href="../style/admin-index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
<?php include("./sidebar.php"); ?>
    <div class="container">
        <?php
        include("../config.php");
        $selectquery="select * from experience where valid='0'";
        $query=mysqli_query($con, $selectquery);
        $nums = mysqli_num_rows($query);
        if($nums==1){
            ?>
        <div class="blog-post">
            <h1>No user experience is there to add or reject.</h1>
        </div>
            <?php
        }
        while($res = mysqli_fetch_array($query)){
        ?>
        <div class="blog-post">
        <h2><?php echo $res['jobtitle']; ?></h2>
            <p><?php echo $res['location']; ?></p>
            <p><?php echo $res['company']; ?></p>
            <p>Interview Experience:</p>
            <p><?php echo $res['description']; ?></p>
            <button type="button" style="background-color: black; padding: 10px; " ><a style="color: white; text-decoration: none;" href="./add-blog-for-users.php?id=<?php echo $res['id']; ?>">Add</a></button>
            <button type="button" style="background-color: black; padding: 10px;" ><a style="color: white; text-decoration: none;" href="./reject-blog-for-users.php?id=<?php echo $res['id']; ?>">Reject</a></button>
        </div>
        <?php } ?>
    </div>
</body>
</html>
