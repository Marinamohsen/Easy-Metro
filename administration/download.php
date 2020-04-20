<?php 
include'../config.php';
if(isset($_GET['file'])){
$file=$_GET['file'];
$sql="select * from reports where file='$file'";
$download=mysqli_query($CONNECTION,$sql);
header('Content-Type:application/octet-stream');
header('Content-Disposition:attachement; filename=""'.basename($file).'"');
header('Content-Lenght:'. filesize('$file'));
readfile($file);

}