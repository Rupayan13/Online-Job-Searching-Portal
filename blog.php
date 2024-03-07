
<?php include("./header.php"); ?>
<?php
if(!isset($_SESSION['username'])){
    header("location: login.php");
}
?>
    <div class="container">
        <?php
        include("./config.php");
        $selectquery="select * from experience where valid='1'";
        $query=mysqli_query($con, $selectquery);
        $nums = mysqli_num_rows($query);
        if($nums==0){
            ?>
        <div class="blog-post" style="height: 60vh;">
            <h1>No user experience is there.</h1>
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
            <p><?php echo substr($res['description'], 0, 50); ?></p>
            <a href="./self-blog.php?id=<?php echo $res['id']; ?>">Read more...</a>
        </div>
        <?php } ?>
    </div>
    <?php include("./footer.php"); ?>
</body>
</html>
