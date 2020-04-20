<?php
session_start();
$title = 'MemberShip | Easy Metro';
include 'function.php';
include 'config.php';

$uid = $_SESSION['user_id'];



if (isset($_POST['submit'])) {
	$target_dir = "membership/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

	$category = $_POST['category'];
	$months = $_POST['months'];

	if (!is_null($category) && !is_null($months)) {
		$price = "150";

		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if ($check == false) {
			echo "File is not an image.";
			$uploadOk = 0;
		}
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		move_uploaded_file(
			$_FILES["fileToUpload"]["tmp_name"],
			$target_file
		);

		$location = $target_file;

		$sql = "INSERT INTO membership (documents, category, months, price, user_id) VALUES ('$location','$category','$months','$price','$uid')";
		mysqli_query($CONNECTION, $sql);
		$newcredit = $_SESSION['credits'] - $price;
	    $_SESSION['credits'] = $newcredit;
	    $sql2 = "UPDATE users SET credits='$newcredit' WHERE user_id='$uid'";
	    mysqli_query($CONNECTION, $sql2);
	
	}
	
}
$select = "select id from membership where user_id='$uid'";
$result = mysqli_query($CONNECTION, $select);
$membership = mysqli_fetch_array($result);
$_SESSION['id'] = $membership[0];


?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php setTitle(); ?></title>
	<link rel="icon" type="image/png" href="images/logo.png" />
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link href="style.css" rel="stylesheet" />
</head>

<body class="membership-page">
	<div id="navbar"></div>
		<div class="membershippage-container" style="padding-top:100px;">
			<div class="container-fluid membership-page">
				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-4 col-md-offset-3 col-lg-offset-4">
						<div class="panel panel-default membership-panel">
							<div class="panel-body">
								<div class="text-center">
									<h1 class="trn membership-title">
										Create a Membership
									</h1>
								</div>

								<form method="post" enctype="multipart/form-data">
									<div class="membership-uploadid">
										<div class="uploadid-text">
											<b><i class="fa fa-id-card-o" aria-hidden="true"></i>
												Upload Your Scanned ID</b>
										</div>
										<div class="row ">
											<div class="col-xs-4 margin-t5">
												<div class="btn btn-primary btn-upload">
													Choose file
													<input type="file" id="input-file" name="fileToUpload" accept="image/*" required />
												</div>
											</div>
											<div class="col-xs-8 padding-0 padding-b10">
												<input class="form-control padding-0" disabled type="text" value="No file selected" id="selected-filename" name="selectedfilename"></input>
											</div>
										</div>
									</div>

									<div class="membership-categories">
										<div class="uploadid-text">
											<b>
												<i class="fa fa-users" aria-hidden="true"></i>
												choose your Category
											</b>
										</div>
										<select class="form-control js-select-category" name="category">
											<option disabled selected>Select category</option>
											<option value="audiance">Audiance</option>
											<option value="student">Student</option>
											<option value="employee">government employee</option>
											<option value="specialneeds">With special needs (Elderly
												people/Disabled)</option>
										</select>
									</div>

									<div class="membership-uploadid js-upload-cer hidden">
										<b><i class="fa fa-certificate" aria-hidden="true"></i>Upload Your enrolment
											cerificate</b>
										<p class="help-block">
											Uni/school/work/special needs
											cerificate
										</p>
									</div>

									<div class="membership-offers">
										<div class="uploadid-text">
											<b>
												<i class="fa fa-money" aria-hidden="true"></i>
												choose your offer
											</b>
										</div>
										<select class="form-control" name="months">
											<option disabled selected>Select offer</option>
											<option value="3">Three Months
												subscription</option>
											<option value="6">Six Months
												subscription</option>
											<option value="12">One Year
												subscription</option>
										</select>
									</div>
									<button type="submit" class="btn btn-primary submit-btn" name="submit">
										Submit
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- Modal -->
	<div class="modal fade" id="createdMembershipModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
				<div class="modal-header">
					<span>
						Membership
					</span>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="js-step2-done modal-body">
					<div class="done-icon text-center">
						<i class="fa fa-check-circle" aria-hidden="true"></i>
					</div>
					<div class="done-text text-center">
						<span>
							<b>Wait for Approval Notification to confirm
								your subscription</b><br />
						</span>						
					</div>
				</div>

				<div class="js-step2-error modal-body hidden">
					<div class="error-icon text-center">
						<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
					</div>
					<div class="done-text text-center">
						<span>
							<b>You Don't have enough credit<br />
								<a href="charging.php">Recharge</a> and try
								again
							</b>
						</span>
					</div>
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
	<script>
		$('#navbar').load('./navbar.php	');
		$('#footer').load('./footer.php');
		//modal

		$(".js-select-category").change(function(event) {
			var selectedValue = event.currentTarget.value;
			if (selectedValue != "audiance") {
				$(".js-upload-cer").removeClass("hidden");
			} else {
				$(".js-upload-cer").addClass("hidden");
			}
		});
		$(".js-go-clicked").submit(function(event) {
			event.preventDefault();
			$(".js-step1").removeClass("hidden");
			$(".js-step2-done").addClass("hidden");
		});

		$('input#input-file').change(function(e) {
			var fileName = e.target.files[0].name;
			$('#selected-filename').val(fileName);
		});
	</script>
	<?php if (isset($_POST['submit']))
		echo "<script type='text/javascript'> $(document).ready(function(){ $('#createdMembershipModal').modal('show'); }); </script>"; ?>
</body>

</html>