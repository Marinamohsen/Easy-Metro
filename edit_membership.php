<?php
session_start();

include "config.php";
$mid = $_GET['mid'];
$uid = $_SESSION['user_id'];
$category = $_POST['category'];
$offer = $_POST['offer'];
$updateMembership = "update membership set
                  documents='$location',
                 category='$category',
			     months='$offer'
		         where id='$mid' and user_id='$uid'";

mysqli_query($CONNECTION, $updateMembership);
header('location:Easymetro.php');
