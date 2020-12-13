<!doctype html>
<html class="no-js" lang="ar">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- The above 3 meta tags *must* come first in the head -->

    <!-- SITE TITLE -->
    <title>مجموعة نوفا لطب الأسنان</title>
    <meta name="description" content="" />
    <meta name="keywords" content="Bootstrap3, Medical,  Doctor, Hospital, Template, Responsive, HTML5" />
    <meta name="author" content="Advertizer" />

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css" media="all" />

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="assets/libs/fontawesome/css/font-awesome.min.css" media="all" />

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="assets/libs/maginificpopup/magnific-popup.css" media="all" />

    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="assets/libs/owlcarousel/owl.carousel.min.css" media="all" />
    <link rel="stylesheet" href="assets/libs/owlcarousel/owl.theme.default.min.css" media="all" />
    <link rel="stylesheet" href="assets/libs/datepicker/bootstrap-datetimepicker.min.css" media="all" />

    <!-- MASTER  STYLESHEET  -->
    <link rel="stylesheet" href="assets/css/style-default.min.css" media="all" />
    <link rel="stylesheet" href="assets/css/over-style.css" media="all" />
    <link rel="stylesheet" href="assets/css/responsive.css" media="all" />

    <!-- MODERNIZER CSS  -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://kit.fontawesome.com/d6d117068c.js" crossorigin="anonymous"></script>

</head>

<body class="home">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
            your browser</a> to improve your experience.
        </p>
    <![endif]-->
    <div class="lgx-container">
        <header>
            <div id="lgx-header" class="lgx-header">
                <div class="lgx-header-position lgx-header-position-fixed ">
                    <div class="lgx-container">
                        <nav class="navbar navbar-default lgx-navbar">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="lgx-logo">
                                    <a href="index.html" class="lgx-scroll">
                                        <img src="assets/img/logo.png" alt="Logo" />
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <div class="lgx-nav-right navbar-right">
                                    <div class="lgx-cart-area">
                                        <a class="lgx-btn lgx-btn-red" href="tel:059 701 7860"><span> 059 701 7860</span></a>
                                    </div>
                                </div>
                                <ul class="nav navbar-nav lgx-nav navbar-right" dir="ltr">
                                    <li><a href="index.html" class="active">الرئيسية</a>
                                    <li>
                                    <li><a href="about.html">نبذة عنا</a></li>
                                    <li><a class="lgx-scroll" href="services.html">الخدمات</a></li>
                                    <li><a class="lgx-scroll" href="doctors.html">الأطباء</a></li>
                                    <li><a class="lgx-scroll" href="contact.html">تواصل معنا</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!--HEADER END-->

        <style>
            body {
                text-align: center;
                height: auto;
            }

            h3 {
                direction: rtl;
                line-height: 2;
            }
            .lgx-header-position-fixed {
                -moz-box-shadow: 0 10px 20px -12px rgba(0,0,0,.42),0 3px 20px 0 rgba(0,0,0,.12),0 8px 10px -5px rgba(0,0,0,.2);
                -webkit-box-shadow: 0 10px 20px -12px rgba(0,0,0,.42), 0 3px 20px 0 rgba(0,0,0,.12), 0 8px 10px -5px rgba(0,0,0,.2);
                -o-box-shadow: 0 10px 20px -12px rgba(0,0,0,.42),0 3px 20px 0 rgba(0,0,0,.12),0 8px 10px -5px rgba(0,0,0,.2);
                box-shadow: 0 10px 20px -12px rgba(0,0,0,.42), 0 3px 20px 0 rgba(0,0,0,.12), 0 8px 10px -5px rgba(0,0,0,.2);
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
                                $email= "novaalarid@gmail.com";

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
                                        mail($email,"رسالة لمجموعة نوفا لطب الأسنان ",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                        echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت ..");
                                    }
                                }
                            ?>
                        </h3>
                    </header>
                </div>
            </section><!-- #contact -->
        </main>

        <!--FOOTER-->
        <footer>
            <div id="lgx-footer" class="lgx-footer lgx-footer-fixed">
                <div class="lgx-inner-footer">
                    <div class="container">
                        <div class="lgx-footer-area" dir="rtl">
                            <div class="row">
                                <div class="col-sm-4 col-md-4">
                                    <div class="lgx-footer-single">
                                        <a class="logo" href="index.html"><img src="assets/img/logo.png" alt="Logo"></a>
                                        <h3 class="footer-contact">رسالتنا تقديم الخدمات الطبية بأفضل جودة ممكنة على يد كوادر طبية مؤهلة وبأحدث الاجهزة والتقنيات</h3>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="lgx-footer-single">
                                        <h3 class="footer-title">خريطة الموقع</h3>
                                        <ul class="list-unstyled lgx-footer-link">
                                            <li><a href="index.html">الرئيسية</a></li>
                                            <li><a href="about.html">نوفا</a></li>
                                            <li><a href="services.html">الخدمات</a></li>
                                            <li><a href="doctors.html">الأطباء</a></li>
                                            <li><a href="contact.html">تواصل معنا</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="lgx-footer-single">
                                        <h3 class="footer-title">معلومات التواصل</h3>
                                        <ul class="list-unstyled lgx-footer-link contact-links">
                                            <li><i class="fas fa-map-marker-alt"></i><a href="#"> حي العارض، طريق الملك عبدالعزيز، الرياض</a></li>
                                            <li><i class="fas fa-envelope-open-text"></i><a href="mailto:info@novadental.com.sa"> info@novadental.com.sa</a></li>
                                            <li><i class="fas fa-phone-alt"></i><a href="tel:059 701 7860" dir="ltr"> 059 701 7860</a></li>
                                            <li><i class="fas fa-phone-alt"></i><a href="tel:055 629 8810" dir="ltr"> 055 629 8810</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lgx-footer-bottom">
                            <div class="lgx-copyright text-center">
                                <p>جميع الحقوق محفوظة © تصميم وتطوير <br><a href="https://advertizer.sa.com/" target="_blank">شركة أدفرتيزر للتسويق الالكتروني</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <a class="lgx-backtop show"></a>

    </div>
    <!--//.LGX SITE CONTAINER-->

    <!-- JQUERY  -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!-- BOOTSTRAP JS  -->
    <script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/libs/datepicker/bootstrap-datetimepicker.js"></script>
    <!-- Smooth Scroll  -->
    <script src="assets/libs/jquery.smooth-scroll.js"></script>
    <!-- adding magnific popup js library -->
    <script type="text/javascript" src="assets/libs/maginificpopup/jquery.magnific-popup.min.js"></script>
    <!-- Owl Carousel  -->
    <script src="assets/libs/owlcarousel/owl.carousel.min.js"></script>
    <!-- Counter JS -->
    <script src="assets/libs/waypoints.min.js"></script>
    <script src="assets/libs/counterup/jquery.counterup.min.js"></script>
    <!-- SMOTH SCROLL -->
    <script src="assets/libs/jquery.smooth-scroll.min.js"></script>
    <script src="assets/libs/jquery.easing.min.js"></script>
    <!-- header parallax js -->
    <script src="assets/libs/header-parallax.js"></script>
    <!-- instafeed js -->
    <script src="assets/libs/instafeed.min.js"></script>
    <!-- CUSTOM SCRIPT  -->
    <script src="assets/js/custom.script.js"></script>
    <div class="lgx-switcher-loader"></div>
</body>

</html>
