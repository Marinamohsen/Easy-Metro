<?php
include'../config.php';
$id=$_GET['id'];
$deleteReport="delete from reports where id='$id'";
mysqli_query($CONNECTION,$deleteReport);
header('location:dashboard.php?page=checkreport.php');