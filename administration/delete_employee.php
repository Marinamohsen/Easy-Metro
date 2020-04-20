<?php
include'../config.php';
$id=$_GET['eid'];
$deleteEmployee="delete from administration where administrationId='$id'";
mysqli_query($CONNECTION,$deleteEmployee);
header('location:dashboard.php?page=checkprocess.php');