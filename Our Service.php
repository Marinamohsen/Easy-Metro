<?php 
$title='Our Service|EasyMetro';
include'function.php';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php setTitle();?></title>
    <link rel="icon" type="image/png" href="images/logo.png"/>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">  
    <link rel="stylesheet" href="css/bootstrap.css">
</head>  
<body>
    <div class="ourservices-page">
        <div id="navbar"></div>
        <div class="col-md-8 col-md-offset-2">
            <p>
             <h2>About our app:</h2>   
             In the beginning, let’s discuss the issues that we all face in the Metro stations every day.
             First of all, the crowd and how it waste a lot of our time and effort to get to our destinations. It’s hard you know to standin the morning every day in lines to get our tickets which lead to lateness. Second, the memberships which take time to make and renew it although it’s made for offering the best services people should have.<br>
             So after discovering all of these problems and collecting Info plus the surveys. We decided to make an app that offers the best service ever a man could get by using Metro for transportation.<br>

             The app offers the ability of booking the ticket needed for your trip without the need of standing in queues to pay for the tickets or for the membership cards beside you can pay online to save your time and effort.<br>
             To make it more easy, you have two options when you use our app:
             Weather you can use the latest technology which is the QR code technology.
             QR code is a type of a barcode that contains a matrix of dots and it can be scanned using your smartphone with put-in camera and in metro it will be scanned by the machines. Once scanned, software on the device converts the dots within the code into numbers or strings of characters.<br>

             Furthermore our app benefits haven’t ended yet, this app contributes with both ministers transportation and tourism as it gives a good recommendation for ancient and touristic places that are near to your destination with reasonable prices<br>
             Finally the role of this app is to offer the best service to metro consumers and to end all of the problems that is discussed. In addition make our country more advanced.<br/>
             <span class="contact-info">
                 <h4>Contact info. :</h4>
                 <i class="fa fa-mobile-alt">  </i>Mobile Number:0114493223<br>
                 <i class="fa fa-envelope"></i> E-mail:easymetroapp@gmail.com<br>
                 <i class="fa fa-map-marker-alt"> </i> Adress: Anwar Al Sadat station, Tahrir station.<br>  
             </span>
         </p>
     </div>
     <div id="footer"></div>  
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script src="js/bootstrap.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     <script>    
       $('#navbar').load('./navbar.php');
       $('#footer').load('./footer.php');
   </script>
</body>
</html>
