<?php
session_start();
include 'config.php';
$uid = $_SESSION['user_id'];
?>
<nav class="navbar navbar-fixed-top">
    <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <i class="fas fa-bars nav-icon"></i>
            </button>
            <a class="navbar-brand" href="index.php" >
                <img class="img-responsive" width="80" alt="EasyMetro" src="images/metrologo.png">
            </a>

        </div>
      <?php 
			if(!isset($_SESSION['firstname'])){?>
	
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li><a class="nav-options" href="login.php">Book Ticket</a></li>
                <li><a class="nav-options" href="login.php">Membership</a></li>
                <li><a class="nav-options" href="login.php">Charging</a></li>
                <li><a class="nav-options" href="login.php">Pocket</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle nav-options" data-toggle="dropdown">Our Services<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="option"><a href="FAQ.php">FAQ</a></li>
                        <li class="option"><a href="Our Service.php">About Us</a></li>
                        <li class="option"><a href="Sponsors.php">Sponsors</a></li>
                    </ul>
                </li>
               </ul>
                <ul class="navbar-right nav navbar-nav" style="padding-top:15px;">
       <a href="registeration.php" class="btn btn-primary nav-options">Register</a>
       <a href="login.php" class="btn btn-primary nav-options">Login</a>
      </ul>
			<?php }else{?>

             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li><a class="nav-options" href="ticket.php">Book Ticket</a></li>
                <li><a class="nav-options" href="Membership.php">Membership</a></li>
                <li><a class="nav-options" href="charging.php">Charging</a></li>
                <li><a class="nav-options" href="Mytickets.php">Pocket</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle nav-options" data-toggle="dropdown">Our Services<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="option"><a href="FAQ.php">FAQ</a></li>
                        <li class="option"><a href="Our Service.php">About Us</a></li>
                        <li class="option"><a href="Sponsors.php">Sponsors</a></li>
                    </ul>
                </li>
                </ul>
            <ul class="navbar-right nav navbar-nav">
			
				   <li><a class="nav-options">Welcome,
                        <span style="text-transform: capitalize;">
                            <?php echo $_SESSION['firstname'];?>
                        </span>
                    </a> </li>
					 <li>
                   <a class="nav-options" href="logout.php"><i class="fa fa-sign-out-alt" title="Log Out"></i></a>
               </li><?php  }?>
               
           </ul>


       </div><!-- /.navbar-collapse -->
   </div><!-- /.container-fluid -->
</nav>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(50).fadeIn(500);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(50).fadeOut(500);
    });

    var link = window.location.pathname.split('/');
    var filename = link[link.length - 1];
    $('.nav-options[href="' + filename + '"]').addClass('active');
</script>