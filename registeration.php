<?php
$title = 'Sign Up';
include 'function.php';
include 'config.php';
if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$secondname = $_POST['secondname'];
	$password = md5($_POST['password']);
	$email = $_POST['email'];
	$national_id = $_POST['national_id'];
	$createusers = "insert into users(firstname,secondname,national_id,password,email, credits)
	values('$firstname','$secondname','$national_id','$password','$email', 0)";

	mysqli_query($CONNECTION, $createusers);
	echo 'your account Created Successfully';
	header('location:Easymetro.php');
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="style.css">

</head>

<body class="register-page">
	<header class="text-center">
		<img class="logo" src="images/logo1.png">
	</header>
	<div class="maincontainer">
		<div class="container-fluid">


			<div class="row">
				<div class="col-xs-12 col-md-6 col-lg-4 col-md-offset-3 col-lg-offset-4">
					<div class="panel panel-default register-panel">
						<div class="panel-body">
							<div class="text-center">
								<h1>Sign Up to Ride</h1>
								<h4>Sign Up to Ride</h4>
							</div>
							<form method="post">
								<div class="row">
									<div class="col-xs-6">
										<div class=" form-group">
											<label for="exampleInputEmail1">First Name</label>
											<input type="text" class="form-control" id="exampleInputEmail1" name="firstname" placeholder="FirstName">
										</div>

									</div>
									<div class="col-xs-6">
										<div class=" form-group">
											<label for="exampleInputEmail1">Second Name</label>
											<input type="text" class="form-control" id="exampleInputEmail1" name="secondname" placeholder="SecondName">
										</div>

									</div>
								</div>



								<div class="form-group">
									<label for="exampleInputEmail1">E-mail</label>

									<div class="input-right-icon">
										<input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
										<div class="right-icon">
											<i class="fa fa-envelope" aria-hidden="true"></i>
										</div>
									</div>
								</div>


								<div class="form-group">
									<label for="exampleInputEmail1">National ID No.</label>
									<div class="input-right-icon">
										<input type="Phone" class="form-control" id="exampleInputEmail1" name="national_id" placeholder="ID">
										<div class="right-icon">
											<i class="fa fa-id-card-o" aria-hidden="true"></i>
										</div>
									</div>
								</div>



								<div class="form-group">
									<label for="exampleInputPassword1">Password</label>

									<div class="input-right-icon">
										<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
										<div class="right-icon">
											<i class="fa fa-unlock-alt" aria-hidden="true"></i>

										</div>
									</div>
								</div>

								<button type="submit" name="submit" class="btn btn-primary submit-btn">Sign Up</button>
							</form>
							<br />
							<a href="login.php">Already have an account?</a>

						</div>
					</div>
				</div>

				<div id="footer"></div>

				<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
				<script>
					$('#footer').load('./footer.php');
				</script>

</body>

</html>