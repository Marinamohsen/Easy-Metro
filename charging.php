<?php
session_start();

$title = 'Charge | Easy Metro';
include 'function.php';
include 'config.php';
$uid = $_SESSION['user_id'];


if (isset($_POST['go'])) {
	$newcredit = $_SESSION['credits'] + 200;
	$_SESSION['credits'] = $newcredit;
	$sql = "UPDATE users SET credits='$newcredit' WHERE user_id='$uid'";
	mysqli_query($CONNECTION, $sql);
	header('location:Easymetro.php');
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php setTitle(); ?></title>
	<link rel="icon" type="image/png" href="images/logo.png" />
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="style.css" rel="stylesheet">
</head>

<body class="charging-page">
	<div id="navbar"></div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
				<div class="fawry-info">
					<h1>Your available credits are <?php echo $_SESSION['credits']; ?> EGP</h1>
					<p>
						Pay by Fawry.
						Pay for your order through any of Fawry's cash points at your convenient time and location across Egypt. Important information:
						<ol>
							<li>Minimum purchase amount is 50 EGP, maximum 500 EGP.</li>
							<li>Once you place your order, you have to pay within 48 hours. Otherwise the transaction will get cancelled.</li>
							<li>5 EGP is charged by Fawry as an additional, non-refundable fee</li>
							Please check your nearest Fawry’s cash point using this link:<br /> <a href="http://fawry.com/storelocator"> http://fawry.com/storelocator</a><br />
							Do not hesitate to call our customer service on 19586 if any question.
						</ol>
					</p>
				</div>
				<!---/ fawry-info/-->
			</div><!-- /.col-lg-6 -->
		</div><!-- /row -->
		<div class="row">
			<form method="post">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
					<div class="input-group fawry-input">

						<input type="text" class="form-control enter-code" placeholder="Enter fawry coupon code here.." required>
						<span class="input-group-btn">
							<button class="btn btn-default fawry-btn" type="submit" name="go" data-toggle="modal" data-target="#myModal"><span class="add-credit">Add Credit</span></button></span>

					</div><!-- /input-group -->
				</div>
			</form>
		</div>
		<!---row-->
		<div class="row payment-logos">
			<div class="col-xs-6 col-sm-2 col-sm-offset-2 col-lg-1 col-lg-offset-4 text-center">
				<img class="payment-logo" src="images/paypalf.png">
				<p class="coomingsoon">Cooming Soon</p>

			</div>
			<div class="col-xs-6 col-sm-2 col-lg-1 text-center">
				<img class="payment-logo" src="images/visaf.png">
				<p class="coomingsoon">Cooming Soon</p>


			</div>
			<div class="col-xs-6 col-sm-2 col-lg-1 text-center">
				<img class="payment-logo" src="images/mastercardf.png">
				<p class="coomingsoon">Cooming Soon</p>


			</div>
			<div class="col-xs-6 col-sm-2 col-lg-1 text-center">
				<img class="payment-logo" src="images/fawryf.png">
				<p class="availablenow">Available now</p>


			</div>
		</div>
		<!--/row-->


	</div> <!-- container-fluid -->


	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
				<div class="modal-header">
					<span>
						Charging credit
					</span>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="charging-done modal-body">
					<div class="done-icon text-center">
						<i class="fa fa-check-circle" aria-hidden="true"></i>
					</div>
					<div class="done-text text-center">
						<span>
							<b>You have charged your credit by 200 EGP and your total current balance is 200 EGP</b>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer"></div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
	<script>
		$('#navbar').load('./navbar.php');
		$('#footer').load('./footer.php');

		$('#exampleModal').on('show.bs.modal', function(event) {
			var button = $(event.relatedTarget) // Button that triggered the modal
			var recipient = button.data('whatever') // Extract info from data-* attributes
			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			var modal = $(this)
			modal.find('.modal-title').text('New message to ' + recipient)
			modal.find('.modal-body input').val(recipient)
		});
	</script>
</body>
</html>