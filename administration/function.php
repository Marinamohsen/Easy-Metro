<?php
include'../config.php';
function setTitle(){

global $title;
 if(isset($title) && !isset($_GET['page']))
 {
	 echo $title;
 }else if (isset($title) && isset($_GET['page'])){
	  echo $title;
     switch($_GET['page']){
		 
		  case'createreport.php':
		  echo'|Create report';
		  break;
		  
		  case'checkreport.php':
		  echo'|Check report';
		  break;
		  
		  case'addauthorizedemployee.php':
		  echo'|Add Authorized Employee';
		  break;
		  
		  case'checkprocess.php':
		  echo'|Check process';
		  break;
		  
		  case'giveapprove.php':
		  echo'|Give approve';
	      break;
		 
	 }
 }
 }
 
 
	 
	 
 
 
 
 function totalReports()
{ global $CONNECTION;
	$sql="select count(*)from reports";
	$result=mysqli_query($CONNECTION,$sql);
	$total=mysqli_fetch_array($result);
	
	echo $total[0];
	
	}
		 
		 
function totalDocuments()
{ global $CONNECTION;
	$sql="select count(*)from membership";
	$result=mysqli_query($CONNECTION,$sql);
	$total=mysqli_fetch_array($result);
	
	echo $total[0];
	
	}		 
	
		 
		 
			 
			 
			 


	 
