<?php
session_start();

$title = 'Ticket | Easy Metro';
include 'function.php';
include 'config.php';

$uid = $_SESSION['user_id'];

if (isset($_POST['buyticket'])) {
	$from = $_POST['from_station'];
	$to = $_POST['to_station'];
	$price = $_POST['price'];

	$sql = "INSERT INTO ticket (from_station,to_station,user_id,price) VALUES ('$from','$to','$uid','$price')";
	mysqli_query($CONNECTION, $sql);
	$newcredit = $_SESSION['credits'] - $price;
	$_SESSION['credits'] = $newcredit;
	$sql2 = "UPDATE users SET credits='$newcredit' WHERE user_id='$uid'";
	mysqli_query($CONNECTION, $sql2);
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
	<link href="css/jquery-ui.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="style.css" rel="stylesheet">

</head>

<body class="ticket-page">
	<div id="navbar"></div>


	<!--- <img class="background-ticketpage"src="images/Metro23.jpg"> --->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-10 col-md-offset-1 col-sm-offset-2">
				<div class="ticketpage-container">
					<div class="wrapper">
						<form class="js-go-clicked">
							<div class="row">
								<div class="group col-xs-12 col-md-offset-1 col-md-4">
									<input type="text" id="fromstation" class="fromstation" required /><span class="highlight"></span><span class="bar"></span>
									<label for="fromstation"> <i class="fa fa-map-marker" aria-hidden="true"></i>
									From</label>
								</div>
								<div class="group col-xs-12 col-md-4">
									<input type="text" id="tostation" class="tostation" required /><span class="highlight"></span><span class="bar"></span>
									<label for="tostation"><i class="fa fa-map-marker" aria-hidden="true"></i>
									To</label>
								</div>
								<div class="col-xs-12 col-md-2">
									<input type="submit" value="GO!" class="btn btn-primary">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	


	<!-- Modal -->
	<div class="modal fade" id="ticket-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
				<div class="modal-header">
					<span>
						Your Trip
					</span>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class='js-step1 modal-body'>
					<ul class="list-group list-group-item">
						<li class="from-text">
							<span class="dot"></span><span class="behind-dot">FROM</span><br><b class="text-size" id="startstation">You didn't select a start station!</b>
						</li>

						<li class="vertical">
							<span class="changestation"><b id="changestation"></b></span>
						</li>

						<li class="to-text">
							<span class="dot"></span><span class="behind-dot">TO</span><br><b class="text-size" id="endstation">You didn't select an end station!</b>
						</li>
					</ul>

					<form method="post" enctype="multipart/form-data">
						<input type="hidden" id="input-from" name="from_station">
						<input type="hidden" id="input-to" name="to_station">
						<input type="hidden" id="input-price" name="price">

						<button type="submit" name="buyticket" class="btn btn-primary paybtn <?php if ($_SESSION['credits'] == 0) echo 'hidden' ?>">
							<!---js-paybtn--->
							<span class="price">
								<span class="ticketprice">ERROR</span>
								EGP
							</span>
							<span class="paynow">
								Pay Now
							</span>
						</button>
						<a class="btn btn-primary paybtn no-credit a <?php if ($_SESSION['credits'] != 0) echo 'hidden' ?>" href="charging.php">
							<!---js-paybtn--->
							<span class="price">
								<span class="ticketprice">ERROR</span>
								EGP
							</span>
							<span class="paynow">
								Charge now
							</span>
						</a>
						<span class="credits">Your Credit (<?php echo $_SESSION['credits']; ?> EGP)</span>
					</form>
				</div>

				<div class='js-step2-done modal-body hidden'>
					<div class="done-icon text-center">
						<i class="fa fa-check-circle" aria-hidden="true"></i>
					</div>
					<div class="done-text text-center">
						<span>
							<b>One Ticked has been bought successfully<br />
								<a href="Mytickets.php">check your pocket</a></b>
								<br />
								<b>Your new credit balance is <?php echo $_SESSION['credits']; ?></b>
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
									<a href="charging.php">Recharge</a> and try again</b>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="footer"></div>

			<!-- jQuery -->
			<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
			<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
			<script src="buy-ticket.js"></script>


			<script>
				$('#navbar').load('./navbar.php	');
				$('#footer').load('./footer.php');

				/* modal*/

				$('#exampleModal').on('show.bs.modal', function(event) {
			var button = $(event.relatedTarget) // Button that triggered the modal
			var recipient = button.data('whatever') // Extract info from data-* attributes
			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			var modal = $(this)
			modal.find('.modal-title').text('New message to ' + recipient)
			modal.find('.modal-body input').val(recipient)
		});
				/* end modal*/
			</script>

			<?php if (isset($_POST['buyticket']))
			echo "<script type='text/javascript'>$(document).ready(function(){
				$('#ticket-modal').modal('show');
				$('.js-step1').addClass('hidden');
				$('.js-step2-done').removeClass('hidden');
			}); </script>"; ?>
		</body>

		</html>