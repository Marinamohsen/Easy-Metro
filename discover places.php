<?php
session_start();

$title = 'Disover|Easy Metro';
include 'function.php';
include 'config.php';
$uid = $_SESSION['user_id'];
$select = "select * from stations where station='Al-Shohadaa'";
$result = mysqli_query($CONNECTION, $select);
if (mysqli_num_rows($result) == 1) {
	$row = mysqli_fetch_array($result);
	$row[0];
}
$place = "select * from places where id='$row[0];'";
$placeSelection = mysqli_query($CONNECTION, $place);
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
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
	<link href="style.css" rel="stylesheet">
</head>

<body class="discover-page">

	<div class="footer-minheight">
		<div id="navbar"></div>

		<div class="container">
			<?php while ($row = mysqli_fetch_array($placeSelection)) { ?>
				<div class="row">

					<div class="col-sm-6 col-md-4 col-lg-4">

						<div class="thumbnail card">
							<img class="img1" src="<?php echo $row[1]; ?>" alt="...">
							<div class="caption">
								<h4><?php echo $row[2]; ?></h4>
								<div class="discover-btns text-center">
									<a href="<?php echo $row[3]; ?>" class="btn btn-primary location-button" role="button">Get Location</a></br></br>
									<a href="https://www.uber.com/eg/ar/" class="btn btn-default uber-button" role="button">Uber</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			<?php } ?>
		</div>









	</div>
	<div id="footer">
	</div>
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	<script src="js/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script>
		$('#navbar').load('./navbar.php?uid=<?php echo $uid; ?>');
		$('#footer').load('./footer.php');
	</script>
</body>

</html>