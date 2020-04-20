<?php
session_start();
include 'config.php';
$uid = $_SESSION['user_id'];
$id = $_GET['aid'];
$deleteApprove = "delete from approval where approval_id='$id' and user_id='$uid'";
mysqli_query($CONNECTION, $deleteApprove);
header('location:Easymetro.php');
