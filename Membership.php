<?php
session_start();

include 'function.php';
include 'config.php';
$title = 'My membership|Easy Metro';
$uid = $_SESSION['user_id'];
$resultMemeber = "select * from membership where user_id='$uid'";
$membership = mysqli_query($CONNECTION, $resultMemeber);
if (!isset($_SESSION['id']) && count($membership) == 1) {
	header('location:Membership-create.php');
}
$approve="select * from approval where user_id='$uid'";
$out=mysqli_query($CONNECTION,$approve);

function totalApprove()
{ global $CONNECTION;
	$uid=$_SESSION['user_id'];
	$sql="select count(*)from approval where user_id='$uid'";
	$result=mysqli_query($CONNECTION,$sql);
	$total=mysqli_fetch_array($result);
	
	echo $total[0];
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="style.css" rel="stylesheet">
    <script src="js/qrcode.min.js"></script>
</head>

<body class="mymembership-page">
	<div id="navbar"></div>
	<div class="container">
		<div class="badge" style="background: red; position:fixed; top:10px; left: 30%;z-index: 99999"><?php totalApprove();?></div>
		<div class="row">

			<?php while ($row = mysqli_fetch_array($membership)) { ?>
				<div class="col-xs-12 col-lg-6 col-md-6">
					<div class="ticket1">
						<a href="update_membership.php"><i class="fa fa-edit edit-icon" title="Edit/Update"></i></a>
						<div class="qr1">
		<div id="qrcode<?php echo $row[0]; ?>" data-membershipid="<?php echo $row[0]; ?>" data-toggle="modal" data-target="#qrModal"></div>
							</div>

						<div class="membershipdetails">

							<p><i class="fa fa-users" aria-hidden="true"></i>User: <?php echo $row[2]; ?></p>
							<p><i class="fa fa-money-bill"></i>Offer: <?php echo $row[3]; ?></p>
							<p class="membershipdetails-content"><i class="fa fa-calendar-alt"></i>Purchase Date: 1/5/2019</p>
							<p><i class="fa fa-calendar-alt"></i> Expiry Date: 1/8/2019</p>
						<p class="discover"><a href="discover places.php"> Discover </a>touristic places near to your destination</p>
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
			<div class="col-xs-12 col-md-6">
				<?php while($approvel=mysqli_fetch_array($out)){?>				
					<div class="panel panel-default" >
						<div class="panel-heading">Adminstration Team:</div>
						<div class="panel-body">
							<?php echo $approvel[2];?>
						</div>
					<?php }?>
				</div>
				
			</div>
		</div>

		<div class="modal fade" id="qrModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content col-md-6 col-md-offset-3 col-xs-6 col-sm-4">
						<div class="modal-header">
							<span>
								Membership
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
            </div>

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

		
		$('#qrModal').on('show.bs.modal', function(event) {
			var membershipid = $(event.relatedTarget).data('membershipid');

			$('#qrcode-inmodal').html($('#qrcode' + membershipid).html());
		})

	</script>

</body>

</html>