<?php
require("../config.php");
$id = $_GET['id'];
$updatequery="update experience set valid='1' where id='$id'";
$res=mysqli_query($con, $updatequery);
    if($res){
        header("location: ./view-blog.php");
    }else{
        ?>
        <script>
            alert("reminder is not modified properly");
        </script>
        <?php
    }

?>