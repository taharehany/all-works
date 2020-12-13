<!DOCTYPE html>
<html lang="ar">
    <head>
        <title>دكتور طارق العزيزي</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
    
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        
        <link rel="stylesheet" href="css/aos.css">
        
        <link rel="stylesheet" href="css/ionicons.min.css">

        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/jquery.timepicker.css">
    
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/over-style.css">
        <link rel="stylesheet" href="css/responsive.css">
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	       <div class="container">
               <a class="navbar-brand py-2 px-4" href="index.html"><img src="images/logo.png" /></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	               <span class="icon-bars"></span>
               </button>
               <div class="collapse navbar-collapse" id="ftco-nav">
	               <ul class="navbar-nav ml-auto" dir="rtl">
                       <li class="nav-item active"><a href="index.html" class="nav-link">الرئيسية</a></li>
                       <li class="nav-item"><a href="index.html#about" class="nav-link">نبذة عنا</a></li>
                       <li class="nav-item"><a href="index.html#services" class="nav-link">خدماتنا</a></li>
                       <li class="nav-item"><a href="index.html#contact" class="nav-link">تواصل معنا</a></li>
	               </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->
        
        <style>
            .ftco-navbar-light {
                background: #120f0f!important;
            }
            .ftco-footer {
                position: absolute;
                width: 100%;
                bottom: 0;
            }
            h3 {
                text-align: center;
                width: 100%;
                line-height: 2
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
                                    mail($email,"dr-tarek landing page SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                    echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت، شكرا لك");
                                }
                            }
                            ?>
                        </h3>
                    </header>
                </div>
            </section><!-- #contact -->
        </main>



	   <footer class="ftco-footer ftco-section img">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>جميع الحقوق محفوظة 2018 &copy; تصميم وتطوير<br /><a href="http://advertizer.com.eg/" target="_blank">شركة ادفرتيزر للتسويق الإلكتروني</a></p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/jquery.timepicker.min.js"></script>
        <script src="js/scrollax.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>