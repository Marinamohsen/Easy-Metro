<?php
session_start();
if (!isset($_SESSION['id'])) {
	header('location:Membership.php?uid=<?php echo $uid?>');
}
$title = 'Update MemberShip|Easy Metro';
include 'config.php';
include 'function.php';
$uid = $_SESSION['user_id'];
$selectdetails = "select * from membership where user_id='$uid'";
$result = mysqli_query($CONNECTION, $selectdetails);
$selectdetails = "select * from membership where user_id='$uid'";
$result = mysqli_query($CONNECTION, $selectdetails);
$membership=mysqli_fetch_array($result);
$_SESSION['id']=$membership[0];
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php setTitle(); ?></title>
	<link rel="icon" type="image/png" href="images/logo.png" />
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body class="membershipupdate-page">
	<div id="navbar"></div>
		<div class="membershippage-container" style="padding-top:90px;">
			<div class="container-fluid membership-page">
				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-4 col-md-offset-3 col-lg-offset-4">
						<div class="panel panel-default membership-panel">
							<div class="panel-body">
								<div class="text-center">
									<h2 class="trn membership-title">Update a Membership</h2>
								</div>
								<form action="edit_membership.php?uid=<?php echo $uid;?>&mid=<?php echo $membership[0];?>" method="post">

									<div class="membership-uploadid">
										<div class="membership-categories">
											<div class="uploadid-text"><b><i class="fa fa-users" aria-hidden="true"></i>choose your Category</b></div>
											<select class="form-control js-select-category" name="category">
												<option>Select category</option>
												<option value="audiance">Audiance</option>
												<option value="student">Student</option>
												<option value="governmentemployee">government employee</option>
												<option value="specialneeds(Elderly people/Disabled)">With special needs (Elderly people/Disabled)</option>
											</select>
										</div>
										<div class="membership-uploadid js-upload-cer hidden"><b><i class="fa fa-certificate" aria-hidden="true"></i>Upload Your enrolment cerificate</b>
											<p class="help-block">Uni/school/work/special needs cerificate</p>
										</div>
										<div class="membership-offers">
											<div class="uploadid-text"><b><i class="fa fa-money" aria-hidden="true"></i>choose your offer</b></div>
											<select class="form-control" name="offer">
												<option>Select offer</option>
												<option value="3">Three Months subscription</option>
												<option value="6">Six Months subscription</option>
												<option value="12">One Year subscription</option>
											</select>
										</div>
										<button type="submit" name="submit" class="btn btn-primary submit-btn trn members">Submit</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="footer"></div>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script src="js/bootstrap.js"></script>
			<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

			<script>
				$('#navbar').load('./navbar.php?uid=<?php echo $uid; ?>', 'Membership');
				$('#footer').load('./footer.php');
		//js-select-category
		// js-upload-cer
		//TODO On select change, check if not auduiance , show button (upload)
		$('.js-select-category').change(function(event) {
			var selectedValue = event.currentTarget.value;
			if (selectedValue != "audiance") {
				$('.js-upload-cer').removeClass('hidden');
			} else {
				$('.js-upload-cer').addClass('hidden')
			}
		});
	</script>

</body>

</html>