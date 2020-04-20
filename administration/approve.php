<?php 
include'../config.php';
$mid=$_GET['mid'];
$uid=$_GET['uid'];
if(isset($_POST['submit']))
{
	$subject=$_POST['approvalSubject'];
	$content=$_POST['approvalContent'];
	$sql="insert into approval (approvalSubject,approvalContent,id,user_id) values ('$subject','$content','$mid','$uid')";
	mysqli_query($CONNECTION,$sql);
	echo'Approvel Sent';
	
}

?>
<form method="post" id="approval_form">
<div class="form-group">
<label>Enter Subject</label>
<input type="text" name="approvalSubject"  class="form-control">
</div>
<div class="form-group">
<label>Enter Content</label>
<input type="text" name="approvalContent"  class="form-control">
</div>
<div class="form-group">
<input type="submit" name="submit" value="Send Approval"  class="btn btn-success">
</div>
</form>
