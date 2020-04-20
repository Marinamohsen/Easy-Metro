<?php 
session_start();
$title='Easy Metro';
include'function.php';
if(isset($_SESSION['email'])||isset($_COOKIE['email']))
{
	
} else{
	
 header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php setTitle();?></title>
  <link rel="icon" type="image/png" href="images/logo.png"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="style.css" rel="stylesheet">

</head>
<body class="first-page">
  <div id="navbar"></div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-3 col-lg-3">
        <a href="ticket.php" class="ticket-option text-center">
          <i class="fa fa-subway" aria-hidden="true"></i>

          <h4>Book a Ticket</h4>
        </a>
      </div>

      <div class="col-xs-12 col-sm-3 col-lg-3">
        <a href="Membership.php" class="ticket-option text-center">
          <i class="fa fa-id-card" aria-hidden="true"></i>
          <h4>Create a Membership</h4>
        </a>
      </div>

      <div class="col-xs-12 col-sm-3 col-lg-3">
        <a href="charging.php" class="ticket-option text-center">
          <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          <h4>Charge Credits</h4>
        </a>
      </div>

      <div class="col-xs-12 col-sm-3 col-lg-3">
        <a href="Mytickets.php" class="ticket-option text-center">
          <i class="fa fa-get-pocket"></i>
          <h4>Check ur Pocket</h4>
        </a>
      </div>
    </div>
  </div>


<div id="footer"></div>






<!-- jQuery -->

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>

  $('#navbar').load('./navbar.php');
  $('#footer').load('./footer.php');

  $('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
  }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
  });

</script>

</body>
</html>