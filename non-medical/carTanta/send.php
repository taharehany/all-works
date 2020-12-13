<!DOCTYPE html>
<html lang="ar" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="" />
    <meta name="author" content="Designing By Mohamed Albrolosy" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>الخيال للسيارات</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.css" />

    <!-- mega menu -->
    <link rel="stylesheet" type="text/css" href="css/mega-menu/mega_menu.css" />

    <!-- mega menu -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="css/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />

    <!-- revolution -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">

    <!-- main style -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- Style customizer -->
    <link rel="stylesheet" type="text/css" href="css/style-customizer.css" />
    <link rel="stylesheet" type="text/css" href="css/style-over.css" />
    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
</head>

<body>

 <div id="loading">
  <div id="loading-center">
      <img src="images/loader6.gif" alt="">
 </div>
</div>
<!--=================================
  loading -->
  
<!--=================================
 header -->
<header id="header" class="fancy">
<div class="topbar">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="topbar-left text-md-left text-center">
				   <ul class="list-inline">
                     <li><a href="mailto:info@united-elkhial.com.eg"> <i class="fa fa-envelope-o"> </i> info@united-elkhial.com.eg</a></li> 
                   </ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="topbar-right text-md-right text-center">
					 <ul class="list-inline">
                         <li><a href="tel:16745"> <i class="fa fa-phone"></i> 16745</a></li> 
                         <li><a href="#"><i class="fa fa-facebook"></i></a></li>   
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>   
                         <li><a href="#"><i class="fa fa-instagram"></i></a></li>   
                     </ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!--=================================
 mega menu -->
<div class="menu">  
  <div class="container"> 
    <div class="row"> 
     <div class="col-md-12"> 
     <!-- menu start -->
       <nav id="menu" class="mega-menu">
           <!-- menu list items container -->
           <section class="menu-list-items">
               <!-- menu logo -->
               <ul class="menu-logo">
                   <li>
                       <a href="index.html"><img src="images/logo-onepage.png" alt="logo"> </a>
                   </li>
               </ul>
               <!-- menu links -->
               <ul class="menu-links">
                   <!-- active class -->
                   <li class="active"><a href="index.html"> الرئيسية </a></li>
                   <li><a href=""> الخيال للسيارات </a></li>
                   <li><a href=""> خدمات الخيال </a></li>
                   <li><a href=""> آراء العملاء </a></li>
                   <li><a href=""> تواصل معنا </a></li>
               </ul>
           </section>
         </nav>
        </div>
      </div>
    </div>
    </div>
  <!-- menu end -->
</header>


    <style>
        .footer-3 {
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        body {
            text-align:center
        }
    </style>
    
    <!-- /menubar -->
    <main id="main" style="margin-top: 150px;">
        <section id="about">
            <div class="container">
                <header class="section-header">
                    <h3>
                        <?php
                        $email= "mahmoud@advertizeragency.com";

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
                                $message .= "الموبايل :\n{$_POST["tel"]}\n";
                                $message .= "البريد الإلكتروني :\n{$_POST["email"]}\n";
                                $message .= "الفرع :\n{$_POST["branch"]}\n";
                                $message .= "الرسالة :\n{$_POST["message"]}\n";
                                $message .= "أي بي :\n{$_SERVER['REMOTE_ADDR']}\n";
                                $message = stripslashes($message);
                                $message = wordwrap($message, 70);
                                mail($email,"elkhial landing page SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت، شكرا لك");
                            }
                        }
                        ?>
                    </h3>
                </header>
            </div>
        </section><!-- #contact -->
    </main>



    <!--=================================
 contact -->

<footer class="footer-3 page-section-pt">
  <div class="container">
     <div class="copyright">
      <div class="container">
          <div class="text-center">
              <p> جميع الحقوق محفوظة 2019 &copy; تصميم وتطوير<br /><a href="http://advertizer.com.eg/" target="_blank">شركة ادفرتيزر للتسويق الإلكتروني</a></p>
          </div>
     </div>
    </div>
   </div>
</footer>
 <!--=================================
 footer -->


 <!--=================================
 back to top -->

<div class="car-top button-icon">
  <span><img src="images/car.png" alt=""></span>
</div>

 <!--=================================
 back to top -->

<!--=================================
 jquery -->

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
<!-- revolution -->
<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- custom -->
<script type="text/javascript" src="js/custom.js"></script>
<!-- style customizer  -->
<script type="text/javascript" src="js/style-customizer.js"></script>
  
</body>

</html> 