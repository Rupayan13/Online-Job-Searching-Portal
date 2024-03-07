<?php
require("../config.php");

$id = $_GET['id'];

$deletequery = "delete from experience where id=$id";

$query = mysqli_query($con, $deletequery);

header('location:view-blog.php');

?>