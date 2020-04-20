<?php
include"../config.php";
$employee_id=$_POST['administrationId'];
$postion=$_POST['administrationType'];
$updateEmployee="update administration set administrationType='$postion',
			 startedWork_at=now()
			  where administrationId='$employee_id' ";
			  
mysqli_query($CONNECTION,$updateEmployee);
header('location:dashboard.php?page=checkprocess.php');