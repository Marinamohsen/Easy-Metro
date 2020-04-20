<?php
session_start();
$title = 'Login';
include 'function.php';
include 'config.php';
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$pass = md5($_POST['password']);
	$checklogin = "select user_id,firstname,secondname,national_id,password,email,credits from users where email='$email'and password='$pass'";
	$result = mysqli_query($CONNECTION, $checklogin);
	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_array($result);
		$_SESSION['user_id'] = $row[0];
		$_SESSION['firstname'] = $row[1];
		$_SESSION['email'] = $row[5];
		$_SESSION['password'] = $row[4];
		$_SESSION['credits'] = $row[6];
		header('location:Easymetro.php');
	} else {
		$errorlogin = '<h3>Login Failed</h3>';
		$errorlogin .= 'check your username and userpassword';
		echo $errorlogin;
	}

	if (isset($_POST['keep Me'])) {
		setcookie("email", $_POST['email'], time() + 3600);
		setcookie("password", md5($_POST['password']), time() + 3600);
	}
}
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php setTitle(); ?></title>
	<link rel="icon" type="image/png" href="images/logo.png" />
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">

</head>

<body class="login-page">

	<header class="text-center">
		<img class="logo" src="images/logo1.png">
	</header>

	<div class="maincontainer">
		<div class="container-fluid register-page">



			<div class="row">
				<div class="col-xs-12 col-md-6 col-lg-4 col-md-offset-3 col-lg-offset-4">
					<div class="panel panel-default login-panel">
						<div class="panel-body">
							<div class="text-center">
								<h1 class="trn">Log In</h1>

							</div>
							<form method="post">


								<div class="form-group">
									<label for="exampleInputEmail1">E-mail</label>

									<div class="input-right-icon">
										<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
										<div class="right-icon">
											<i class="fa fa-envelope" aria-hidden="true"></i>
										</div>
									</div>
								</div>




								<div class="form-group">
									<label for="exampleInputPassword1">Password</label>

									<div class="input-right-icon">
										<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
										<div class="right-icon">
											<i class="fa fa-lock" aria-hidden="true"></i>
										</div>
									</div>
								</div>
								<input type="submit" name="submit" class="btn btn-primary submit-btn" value="Log In"><br><br>
								<input type="checkbox" name="keep Me" class="btn">Keep Me LoggedIn <br><br>
							</form>
							<a href="registeration.php">Don't have an account?</a>
						</div>
					</div>
				</div>
			</div>

			<div id="footer"></div>

			<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
			<script src="js/jquery.translate.js"></script>
			<script src="js/translated.js"></script>


			<script>
				$('#footer').load('./footer.php');
			</script>

</body>

</html>