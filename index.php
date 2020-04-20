<?php 
include'function.php';
$title='Home page|Easy Metro';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <title><?php setTitle(); ?></title>
  <link rel="icon" type="image/png" href="images/logo.png"/>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link href="style.css" rel="stylesheet">

</head>
<body class="homepage">
  <div id="navbar"></div>

  <!-- Slider main container -->
  <div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide" >
        <div class="imgswiper" style="background-image: url('images/firstslide.png');">

          <h2 class="textonslide1">Get your ticket by <br> Easy Metro</h2>
          <h4>Now booking tickets is more faster, secure<br> and smarter hurry up and create an account!</h4> 
          
          <a href="registeration.php" target="_blank"><button type="button" class="btn btn-default createbtn-homepage">Create an account</button></a>
        </div> 
      </div>
      <div class="swiper-slide" >
        <div class="imgswiper" style="background-image: url('images/secondslide.png');">

          <h2 class="textonslide1">Purchase your ticket immediately!</h2>
          <h4>Now booking ticket is more faster, secure<br> and smarter hurry up and create an account!</h4> 
          
          <a href="registeration.php" target="_blank"><button type="button" class="btn btn-default createbtn-homepage">Create an account</button></a>
        </div> 
      </div>
      <div class="swiper-slide" >
        <div class="imgswiper" style="background-image: url('images/thirdslide.png');">

          <h2 class="textonslide1">Scan and Go</h2>
          <h4>Now creating a membership is more faster, secure<br> and smarter hurry up and create an account!</h4> 
          
          <a href="registeration.php" target="_blank"><button type="button" class="btn btn-default createbtn-homepage">Create an account</button></a>
        </div> 
      </div>
    </div>


    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>

  <!-- Wrapper for slides -->





  <!-- Controls -->




  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12 text-center">
        <img class="discover-icons" src="images/icons/like3.png"></br>
        <p class="discover-icons-text">Easy</p>  
        <p class="textll">Mobile ticket purchase, easy and without signing in or registering.</p>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
        <img class="discover-icons" src="images/icons/clock2.png"></br>
        <p class="discover-icons-text">Fast</p>
        <p class="textll">The nearest stop or connection is always quickly displayed.</p>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
        <img class="discover-icons" src="images/icons/secure1.png"></br>
        <p class="discover-icons-text">Safe</p>
        <p class="textll">No need for cash, you can pay securely with your mobile phone bill</p>
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
  <script src="js/swiper.min.js"></script>

  <script>


   $('#navbar').load('./navbar.php');
   $('#footer').load('./footer.php');


   $('#carousel-example-generic').carousel('pause');

   $('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
  }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
  });

</script>
<script>
  var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    keyboard: {
      enabled: true,
      onlyInViewport: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  })


</script>

</body>
</html>