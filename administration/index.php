<?php
session_start(); 
$title='Login';
include'../config.php';
include'header.php';

if(isset( $_POST['submit'])){
	
	$user=$_POST['username'];
	$pass=md5($_POST['password']);
	$checklogin="select administrationId,username,password,administrationType from administration where username='$user'and password='$pass'";
	$result=mysqli_query($CONNECTION,$checklogin);
	if(mysqli_num_rows($result)==1){
		$row=mysqli_fetch_array($result);
		$_SESSION['username']=$row[1];
		$_SESSION['administrationType']=$row[3];
		header('location:dashboard.php');
		}else
		{
			
			$errorlogin='<h3>Login Failed</h3>';
			$errorlogin.='check your username and userpassword';
			}
	
	}
?>
	<div class="limiter">
		<div class="container-login100" style="background-image:url(images/1-8.jpg);">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-logo">
						<img src="images/download.png">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

		<div class="wrap-input100 validate-input" data-validate = "Enter username">
			<input class="input100" type="text" name="username" placeholder="Username" required autocomplete="off">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password" required>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn" name="submit" value="Login">
								
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<?php include'footer.php'; ?>

