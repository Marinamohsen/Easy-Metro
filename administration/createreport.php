<?php 
include'../config.php';
if(isset($_POST['upload'])){
	$subject=$_POST['reportSubject'];
	$name=$_FILES['file']['name'];
	$file=$_FILES['file']['tmp_name'];
	if($name){
    $location="reports/$name";
	move_uploaded_file($file,$location);
	$sql="insert into reports(reportSubject,file)values('$subject','$location')";
	 mysqli_query($CONNECTION,$sql); 
	  
	 echo'Report Uploaded';
	}
}
?>
<form action="" method="post"  enctype="multipart/form-data">
<input class="form-control" type="text" name="reportSubject" placeholder="Report Subject"><br>
<input class="btn btn-primary" type="file" name="file"><br>
<button  class="btn btn-success"  name="upload" >Upload Report <span class="glyphicon glyphicon-upload"></span></button>
</form>


