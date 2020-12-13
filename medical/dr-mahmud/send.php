<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>دكتور محمود الشوبكي || لجراحة العظام</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/over-style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

    <div class="colorlib-loader"></div>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="top">
                                <div class="row justify">
                                    <div class="col-md-6">
                                        <div id="colorlib-logo"><a href="index.html"><i class="flaticon-stethoscope"></i> Dr.<span> El Shobaky</span></a></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="loc" dir="rtl">
                                            <p><span class="icon"><i class="icon-location"></i></span><a href="#">مدينة نصر - شارع الطيران - بجوار مسجد موسي بن النصير </a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="menu-1" dir="rtl">
                                    <ul>
                                        <li class="active"><a href="index.html">الرئيسية</a></li>
                                        <li><a href="index.html#colorlib-about">نبذة عنا</a></li>
                                        <li><a href="index.html#colorlib-services">خدماتنا</a></li>
                                        <li><a href="index.html#colorlib-choose">عروضنا</a></li>
                                        <li><a href="index.html#colorlib-counter">عملائنا</a></li>
                                        <li><a href="index.html#colorlib-contact">تواصل معنا</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p class="btn-cta"><a href="tel:01012564561"><span>01012564561 <i class="icon-phone"></i></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    <style>
        body {
            text-align: center;
            height: auto;
        }

        h3 {
            direction: rtl;
            line-height: 2;
        }

        #colorlib-footer {
            position: absolute;
            width: 100%;
            bottom: 0;
        }
        #page {
            position: static
        }
    </style>

    <!-- /menubar -->
    <main id="main" style="margin-top: 150px;">
        <section>
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
                            $message .= "التليفون :\n{$_POST["tel"]}\n";
                            $message .= "البريد الإلكتروني :\n{$_POST["email"]}\n";
                            $message .= "الرسالة :\n{$_POST["message"]}\n";
                            $message .= "أي بي :\n{$_SERVER['REMOTE_ADDR']}\n";
                            $message = stripslashes($message);
                            $message = wordwrap($message, 70);
                            mail($email,"رسالة لدكتور محمود الشوبكي ",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                            echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت ..");
                        }
                    }
                    ?>
                    </h3>
                </header>
            </div>
        </section><!-- #contact -->
    </main>

    <footer id="colorlib-footer" role="contentinfo">
            <div class="overlay"></div>
            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">جميع الحقوق محفوظة &copy; <script> document.write(new Date().getFullYear()); </script> | تم التصميم بواسطة <br />
                        <a href="http://advertizer.com.eg" target="_blank">شركة أدفرتيزر للتسويق الإلكتروني</a>
                        </small>
                        
                    </p>
                </div>
            </div>
        </footer>
    </div>
    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- countTo -->
    <script src="js/jquery.countTo.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Sticky Kit -->
    <script src="js/sticky-kit.min.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>

</body>

</html>
