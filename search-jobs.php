<?php include("./header.php"); ?>
<?php
if(!isset($_SESSION['username'])){
    header("location: login.php");
}
?>
<div class="container">
    <?php
    include("./config.php");
    $selectquery="select * from jobopening ";
    $query=mysqli_query($con, $selectquery);
    $nums = mysqli_num_rows($query);
    ?>
        <section id="job-openings">
            <h2>Job Openings</h2>
            <?php while($res = mysqli_fetch_array($query)){ ?>
            <div class="job-listing">
                <h3><?php echo $res['jobtitle']; ?></h3>
                <p><?php echo $res['jobdescription']; ?></p>
                <p><?php echo $res['jobrequirements']; ?></p>
                <button><a style="color: white; text-decoration: none;" href="<?php echo $res['link']; ?>">Apply</a></button>
            </div>
            <?php } ?>
        </section>
</div>