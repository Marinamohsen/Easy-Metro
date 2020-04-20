<?php
session_start();
$title = 'Mytickets | Easy Metro';
include 'config.php';
include 'function.php';
$uid = $_SESSION['user_id'];
$result = "select * from ticket where user_id='$uid'";
$ticket = mysqli_query($CONNECTION, $result);

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php setTitle(); ?></title>
	<link rel="icon" type="image/png" href="images/logo.png" />
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet">
	<script src="js/qrcode.min.js"></script>

</head>

<body class="mytickets-page">
	<div id="navbar"></div>
	<div class="container">
		<h3>Your Tickets</h3>

		<?php while ($row = mysqli_fetch_array($ticket)) { ?>
			<div class="row">
				<div class="col-xs-12 col-lg-6 col-md-6">
					<div class="ticket1">
						<div class="qr1">
							<div id="qrcode<?php echo $row[0]; ?>" data-ticketid="<?php echo $row[0]; ?>" data-toggle="modal" data-target="#qrModal"></div>
						</div>
						<p class="ticketdetails-content">
							<?php echo '(';
							echo $row[1];
							echo ' - ';
							echo $row[2];
							echo ')'; ?>
						</p>
						<p class="click">click on this QR code</p>
						<br />
						<p class="discover"><a href="discover.php?sto=<?php echo $row[2]; ?>"> Discover </a>touristic places near to <?php echo $row[2]; ?></p>
						<script type="text/javascript">
							new QRCode(document.getElementById("qrcode<?php echo $row[0]; ?>"), {
								text: "<?php echo $row[0]; ?>",
								width: 80,
								height: 80,
							});
						</script>
					</div>
				</div>
			</div>
		<?php } ?>

		<?php if (count($row) == 0) echo "<h4 class='huge-padding text-center'>No tickets in your pocket <a href='ticket.php'>Book a ticket?</a></h4>"
		?>

		<div class="modal fade" id="qrModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content col-md-6 col-md-offset-3 col-xs-6 col-sm-4">
					<div class="modal-header">
						<span>
							Ticket
						</span>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<div id="qrcode-inmodal" class="QR qr-container text-center"></div>
						<div class="scannow">Scan Now!</div>
					</div>
				</div>
			</div>




		</div>
	</div><!-- container-->
	<div id="footer"></div>
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>

	<script>
		$('#navbar').load('./navbar.php');
		$('#footer').load('./footer.php');
	</script>
	<script>
		$('#qrModal').on('show.bs.modal', function(event) {
			var ticketid = $(event.relatedTarget).data('ticketid');

			$('#qrcode-inmodal').html($('#qrcode' + ticketid).html());
		})
	</script>

</body>

</html>