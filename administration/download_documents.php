<?php 
include'../config.php';
if(isset($_GET['doc'])){
$document=$_GET['doc'];
$sql="select * from membership where documents='$document'";
$download=mysqli_query($CONNECTION,$sql);
header('content-Type: application/octet-stream');
header('content-Disposition: attachement; filename=""'.basename($document).'"');
header('content-Lenght:'. filesize('$document'));
readfile($document);
}