<?php
include'../config.php';
$id=$_GET['eid'];
$selectEmployee="select * from administration where administrationId='$id'";
$result= mysqli_query($CONNECTION,$selectEmployee);
$employee=mysqli_fetch_array($result);
?>
<form action="edit_employee.php" method="post">
<input type="hidden" name="administrationId" class="form-control" value="<?php echo $employee[0]; ?>" >
<select class="btn btn-primary" name="administrationType">
<option>Edit your employee postion</option>
<option value="supervisior" >supervisior</option>
<option value="admin" >admin</option>
<option value="project manager" >project manager</option>
</select> <br><br>
<input type="submit" name="submit" value="Edit your employee postion" class="btn btn-success">
</form>