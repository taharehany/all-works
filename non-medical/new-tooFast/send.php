<!DOCTYPE html>
<html lang="ar">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="author" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>تو فاست || لخدمات السيارات </title>

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

<!-- magnific-popup -->
<link rel="stylesheet" type="text/css" href="css/magnific-popup/magnific-popup.css" />

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
    line-height: 1.8
}
.footer-2 {
    background: #101010;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
}
    
</style>
</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-557RCPW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

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
<div class="topbar" >
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
                <a href="index.html"><img  src="images/logo.png" alt="logo"> </a>
            </li>
        </ul>
        <!-- menu links -->
        <ul class="menu-links">
            <!-- active class -->
            <li class="active d-lg-none d-md-none"><a href="index.html"> الرئيسية <i class="fa fa-home fa-indicator"></i></a> </li>
            <li class="d-lg-none d-md-none"><a href="index.html#about"> عن تو فاست <i class="fa fa-info-circle fa-indicator"></i></a> </li>
            <li class="d-lg-none d-md-none"><a href="index.html#cars"> السيارات <i class="fa fa-car fa-indicator"></i></a> </li>
            <li class="d-lg-none d-md-none"><a href="index.html#services"> خدمات <i class="fa fa-wrench fa-indicator"></i></a> </li>
            <li class="d-lg-none d-md-none"><a href="index.html#contactus"> تواصل معنا <i class="fa fa-location-arrow fa-indicator"></i></a> </li>
        </ul>
        <ul class="menu-links mobile ">
            <!-- active class -->
            <li class="" ><a href="index.html#contactus"> تواصل معنا <i class="fa fa-location-arrow fa-indicator"></i></a> </li>
            <li><a href="index.html#services"> خدمات <i class="fa fa-wrench fa-indicator"></i></a> </li>
            <li><a href="index.html#cars"> السيارات <i class="fa fa-car fa-indicator"></i></a> </li>
            <li><a href="index.html#about"> عن تو فاست <i class="fa fa-info-circle fa-indicator"></i></a> </li>
            <li class="active"><a href="index.html"> الرئيسية <i class="fa fa-home fa-indicator"></i></a> </li>
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


    
<main id="main" style="margin-top:0px;">


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
                            echo("لم تقم بتعبئة جميع الخانات <br>");

                        }
                        $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
                        if(!preg_match($regex, $_POST['email'])){
                            echo("بريد خاطئ");

                        }
                        else{
                            $message  = "الاسم :\n{$_POST["name"]}\n";
                            $message .= "التليفون :\n{$_POST["tel"]}\n";
                            $message .= "البريد الإلكتروني :\n{$_POST["email"]}\n";
                            $message .= "الرسالة :\n{$_POST["message"]}\n";
                            $message .= "أي بي :\n{$_SERVER['REMOTE_ADDR']}\n";
                            $message = stripslashes($message);
                            $message = wordwrap($message, 70);
                            mail($email,"Too Fast Landing Page ",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                            echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت");
                        }

                    }

                    ?>

                </h3>
            </header>
        </div>
    </section><!-- #contact -->
</main>





 <!--=================================
 footer -->

<footer class="footer-2" dir="rtl">
    <div class="copyright">
     <div class="container">
      <div class="row">
       <div class="col-lg-6 col-md-12">
        <div class="text-lg-right text-center">
        <p>©جميع الحقوق محفوظة2019 ... تصميم وتطوير <a href="http://advertizer.com.eg/digital-marketing-services" target="_blank">شركة أدفرتيزر</a></p>
       </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <ul class="list-inline text-lg-left text-center">
          <li><a href="index.html">الرئيسية </a> | </li> 
          <li><a href="#about">تو فاست </a> |</li> 
            <li><a href="#services">خدماتنا </a> |</li> 
            <li><a href="#cars">سياراتنا </a> |</li> 
          <li><a href="#contactus">تواصل معنا </a></li>
        </ul>
      </div>
      </div>
     </div>
    </div>
</footer>

 <!--=================================
 footer -->
 





 <!--=================================
 back to top -->

<div class="car-top">
  <span><img src="images/car.png" alt=""></span>
</div>

 <!--=================================
 back to top -->

<!--=================================
 jquery -->

<!-- jquery  -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
 
<!-- bootstrap -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- mega-menu -->
<script type="text/javascript" src="js/mega-menu/mega_menu.js"></script>

<!-- appear -->
<script type="text/javascript" src="js/jquery.appear.js"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>

<!-- select -->
<script type="text/javascript" src="js/select/jquery-select.js"></script>

<!-- style customizer  -->
<script type="text/javascript" src="js/style-customizer.js"></script>

<!-- custom -->
<script type="text/javascript" src="js/custom.js"></script>

  
</body>

</html>
