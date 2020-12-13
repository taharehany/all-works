<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="author" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Too Fast || limousine for Touristic Land Transport services official website </title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="css/flaticon.css" />

<!-- mega menu -->
<link rel="stylesheet" type="text/css" href="css/mega-menu/mega_menu.css" />

<!-- font awesome -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="css/owl-carousel/owl.carousel.css" />
    
<!-- revolution -->
<link rel="stylesheet" type="text/css" href="revolution/css/settings.css" />

<!-- main style -->
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/main-style.css" />

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
<link rel="stylesheet" type="text/css" href="css/main-responsive.css" />

<!-- Style customizer -->
<link rel="stylesheet" href="#" data-style="styles" />
<link rel="stylesheet" type="text/css" href="css/style-customizer.css" />

</head>

<body>

<style>
    #header.defualt {
    background: #110000;
    padding: 0px;
    margin: 0px;
    position: absolute;
    width: 100%;
}

#main {
    margin-top: 0px;
    position: absolute;
    top: 300px;
    /* left: 0; */
    margin: 0 auto;
    text-align: center;
    width: 100%;
}
#main h3 {
    line-height: 1.8!important
}
.footer-2 {
    background: #101010;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
}
    
</style>
<!--=================================
  loading 
  
 <div id="loading">
  <div id="loading-center">
      <img src="images/loader6.gif" alt="">
 </div>
</div>

=================================
  loading -->


<!--=================================
 header -->

<header id="header" class="defualt">
<div class="topbar">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="topbar-left text-lg-left text-center">
                    <ul class="list-inline">
                        <li><i class="fa fa-phone"></i> 01033287772 - 01033711177</li>    
                        <li><a href="mailto:info@2fastlimousine.com"><i class="fa fa-envelope-o"> </i></a></li>
                        <li><a href="https://www.facebook.com/2fastlimousine"><i class="fa fa-facebook"></i></a></li>   
                        <li><a href="https://twitter.com/2fastlimousine?s=08"><i class="fa fa-twitter"></i></a></li>   
                        <li><a href="https://instagram.com/2fastlimousine?igshid=1w2zrjwx4ci5x"><i class="fa fa-instagram"></i></a></li> 
                    </ul>
				</div>
			</div>
		</div>
	</div>
</div>
 
<!--=================================
 mega menu -->

<div class="menu">  
  <!-- menu start -->
   <nav id="menu" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container"> 
      <div class="row"> 
       <div class="col-md-12"> 
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
                <a href="index.html"><img src="images/logo.png" alt="logo"> </a>
            </li>
        </ul>
        <!-- menu links -->
        <ul class="menu-links">
          <!-- active class -->
            <li class="active"><a href="index.html"><i class="fa fa-home fa-indicator"></i>  Home </a> </li>
            <li><a href="index.html#about"><i class="fa fa-info-circle fa-indicator"></i>  About Us </a> </li>
            <li><a href="index.html#cars"><i class="fa fa-car fa-indicator"></i>  Our Cars </a> </li>
            <li><a href="index.html#services"><i class="fa fa-wrench fa-indicator"></i>  Our Services </a> </li>
            <li><a href="index.html#contactus"><i class="fa fa-location-arrow fa-indicator"></i>  Contact Us </a> </li>
            </ul>
           </div>
          </div>
         </div>
        </section>
       </nav>
      <!-- menu end -->
     </div>
    </header>

<!--=================================
 header -->


    
<main id="main">
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>
                    <?php

                    $email= "reservation@2fastlimousine.com";


                    if (!empty($_POST)){

                        if(empty($_POST['name']) or empty($_POST['tel']) or empty($_POST['email']) or empty($_POST['message'])){
                            echo("You have not filled in all the boxes <br>");

                        }
                        $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
                        if(!preg_match($regex, $_POST['email'])){
                            echo("Wrong mail");

                        }
                        else{

                            $message  = "name :\n{$_POST["name"]}\n";
                            $message .= "number :\n{$_POST["tel"]}\n";
                            $message .= "email  :\n{$_POST["email"]}\n";
                            $message .= "meassage :\n{$_POST["message"]}\n";
                            $message .= "IP  :\n{$_SERVER['REMOTE_ADDR']}\n";
                            $message = stripslashes($message);
                            $message = wordwrap($message, 70);
                            mail($email,"Too Fast Landing Page SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");
                            echo("Your message has been received and we will communicat with you");
                        }
                    }
                    ?>
                </h3>
            </header>
        </div>
    </section><!-- #contact -->
</main>


 <!--footer -->

<footer class="footer-2" >
    <div class="copyright">
     <div class="container">
      <div class="row">

       <div class="col-lg-6 col-md-12">
        <div class="text-lg-left text-center">
        <p> All rights reserved ©2019 … designed & developed By   <a href="http://advertizer.com.eg/digital-marketing-services" target="_blank">Advertizer Company</a></p>
       </div>
      </div>
          <div class="col-lg-6 col-md-12">
            <ul class="list-inline text-lg-right text-center">
              <li><a href="index.html">Home </a> | </li> 
              <li><a href="#about">About US </a> |</li> 
                <li><a href="#services">Our Services </a> |</li> 
                <li><a href="#cars">Our Cars </a> |</li> 
              <li><a href="#contactus">Contact Us</a></li>
            </ul>
          </div>
      </div>
     </div>
    </div>
</footer>
 <!-- footer -->

<!-- jquery  -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
 
<!-- bootstrap -->
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- mega-menu -->
<script type="text/javascript" src="js/mega-menu/mega_menu.js"></script>

<!-- appear -->
<script type="text/javascript" src="js/jquery.appear.js"></script>

<!-- counter -->
<script type="text/javascript" src="js/counter/jquery.countTo.js"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>

<!-- select -->
<script type="text/javascript" src="js/select/jquery-select.js"></script>

<!-- magnific popup -->
<script type="text/javascript" src="js/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- style customizer  -->
<script type="text/javascript" src="js/style-customizer.js"></script>

<!-- custom -->
<script type="text/javascript" src="js/custom.js"></script>
  
</body>

</html>
