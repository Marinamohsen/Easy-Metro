<?php
include('../config.php');

if(isset($_POST['submit']))
{
   $username= $_POST['username'];
   $password=md5( $_POST['password']);
   $administrationType=$_POST['administrationType'];

$addAuthorized="insert into administration (username,password,administrationType,startedWork_at) values('$username','$password','$administrationType',now())";
 mysqli_query($CONNECTION,$addAuthorized);   
   	echo'user Created Successfully';
}
?>
<form action="" method="post">
<input class="form-control" type="text" name="username" placeholder="username" autocomplete="off"><br>
<input class="form-control" type="password" name="password" placeholder="password"><br>
<select name="administrationType" class="btn btn-primary">
<option>Select administration type</option>
<option value="admin">Admin</option>
<option value="supervisior">Supervisior</option>
<option value="project manager">Project Manager</option>
</select><br><br>
<button class="btn btn-success" type="submit" name="submit" >Add Authorized Employee <span class="
glyphicon glyphicon-plus-sign"></span></button>

</form>


