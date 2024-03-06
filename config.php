<?php

$username="root";
$server="localhost";
$password="";
$db="jobmanagementportal";

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    // echo "Connection Succesful";
    
}
else{
    echo "No Connection";
    die("no connection".mysqli_connect_error());
}

?>