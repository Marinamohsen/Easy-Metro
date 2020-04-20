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
                <h3>Our main sponsors:</h3>
                -Ministry of tourism<br>
                - Uber<br>

                *Ministry of tourism is a big part in our web application, as the idea of getting notified about the touristic places around you while getting through the metro .
                As well as making offers on entrance tickets for everyp lace you want to go and explore!<br>

                *Uber being the leader application now-a-days in transportation is helping us by giving promo codes to our Easy Metro users to go and discover the touristic places around the metro station, and by time being a special user you will get rides from the station to the touristic places free from charge! 
                Also being famous for the safety and privacy with the rides you get and insuring you had good experience through the ride and minimizing accidents.


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
