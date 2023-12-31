<?php
    session_start();

    if (!isset($_SESSION['username'])){ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--    <link href="images/logo.jpg" rel="shortcut icon"> -->
    <title>Online pharmaceutical</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

</head><!--/head-->
        
<!--*********************************************START OF NAVIGATION BAR****************************************--> 
<body>
          
      <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php"><h4 class="wow fadeInDown" style="margin-top:20px; color:#FFF;"> 
                      <img src="logo.png"  width="35%" border-radius= "50%"/></h4></a>
                </div>
    
                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                         <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li ><a href="about-us.php">About Us</a></li>
                        <li ><a href="available.php">Available Products</a></li>
                        <li class="active"><a href="contacts.php">Contacts</a></li>
                                                          
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
<!--*********************************************START OF CONTACT INFO****************************************-->
<body>
<br><br>
<div class="container">
        <section id="contact-info">
                <center><span style="font-size:35px; font-weight:bold; font-family:verdana; color:blue;">How to Reach Us?</span></center>

            
                <
               <!--<div class="col-md-6">
                <img src="images/logo.jpg" class="img-responsive pull-right" />
               </div> -->
               
                <center>
                <p class="lead">
                    <br>
                    <p><span style="font-size:20px; font-weight:bold; font-family:verdana; color:red;">Adrian V Martin</span>
                    <br><b>Address:</b>60 Feet Veeranam High Road, Kelambakkam, Tamil Nadu 603103<b><br>Tel/Phone:</b> +7567574678 / 8377287288<b><br>Email Address:</b>patrickjsk@gmail.com</p>
                    <hr>
                    <span style="font-size:20px; font-weight:bold; font-family:verdana; color:Violet;">We are open</span>
                    <p><b>MONDAY TO SUNDAY -- 24/7 !!!</b></p>
                </p>
                <hr>
                <table style="width:80px;">
                    <tr>
                        <td><a href="https://www.facebook.com/patrick.raja.90"><img data-toggle="tooltip" src="images/ico/Facebook.png" class="img-responsive" /></a></td>
                        <td><p> </p></td>
                        <td><a href="https://www.instagram.com/patrick_the_king_04/"><img src="images/ico/icons_Instagram.png" class="img-responsive" /></a></td>
                        <!--<td><a href="http://www.twitter.com"><img src="images/ico/Twitter.png" class="img-responsive" /></a></td>
                        <td><a href="http://www.youtube.com"><img src="images/ico/YouTube.png" class="img-responsive" /></a></td>-->
                    </tr>
                </table>
                </center>
                
            
        
        </section>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<!--*************************************************** FOOTERS **********************************************-->

<?php include('includes/footer.php');?><!--/#footer-->
    <?php include('loginModal.php')?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

<?php 

} else if(isset($_SESSION['username'])) { 

    include('includes/admin.php');

} ?>