<!doctype html>
<html lang="ar">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>وايت ستار | للستائر</title>

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style-over.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>

    <!--====== PRELOADER PART START ======-->
    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== PRELOADER PART ENDS ======-->

    <!--====== NAVBAR PART START ======-->
    <section class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">white star</a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarEight" aria-controls="navbarEight" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarEight" dir="rtl">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">الرئيسية</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">نبذة عنا</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#portfolio">منتجاتنا</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#pricing">عروضنا</a>
                                    </li>
                                    <!--<li class="nav-item">
                                        <a class="page-scroll" href="#testimonial">عملائنا</a>
                                    </li>-->
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">تواصل معنا</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="navbar-btn d-none mt-15 d-lg-inline-block">
                                <a class="menu-bar" href="#side-menu-right"><i class="lni-menu"></i></a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div>
            </div>
        </div> 
        <!-- navbar area -->

        <!--====== SAIDEBAR PART START ======-->
        <div class="sidebar-right">
            <div class="sidebar-close">
                <a class="close" href="#close"><i class="lni-close"></i></a>
            </div>
            <div class="sidebar-content">
                <div class="sidebar-logo text-center">
                    <a href="index.html">white star</a>
                </div> <!-- logo -->
                <div class="sidebar-menu">
                    <ul class="text-right">
                        <li class="nav-item active">
                            <a class="page-scroll" href="index.html">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="page-scroll" href="index.html#about">نبذة عنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="page-scroll" href="index.html#portfolio">منتجاتنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="page-scroll" href="index.html#pricing">عروضنا</a>
                        </li>
                        <!--<li class="nav-item">
                            <a class="page-scroll" href="index.html#testimonial">عملائنا</a>
                        </li>-->
                        <li class="nav-item">
                            <a class="page-scroll" href="index.html#contact">تواصل معنا</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="overlay-right"></div>
        <!--====== SAIDEBAR PART ENDS ======-->

        <style>
            body {
                text-align: center;
                height: auto;
            }
            h3 {
                direction: rtl;
                line-height: 2;
                text-align: center
            }
            .footer-area {
                position: absolute;
                width: 100%;
                bottom: 0;
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
                                        $message .= "التليفون :\n{$_POST["tel"]}\n";
                                        $message .= "البريد الإلكتروني :\n{$_POST["email"]}\n";
                                        $message .= "الرسالة :\n{$_POST["message"]}\n";
                                        $message .= "أي بي :\n{$_SERVER['REMOTE_ADDR']}\n";
                                        $message = stripslashes($message);
                                        $message = wordwrap($message, 70);
                                        mail($email,"white star SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                        echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت ..");
                                    }
                                }
                                ?>
                        </h3>
                    </header>
                </div>
            </section><!-- #contact -->
        </main>

        <!--====== FOOTER FOUR PART START ======-->
        <footer id="footer" class="footer-area" dir="rtl">
            <div class="footer-copyright">
                <div class="container">
                    <div class="align-items-center">
                        <div class="copyright text-center mt-10">
                            <p class="footer-text m-0">جميع الحقوق محفوظة &copy; 2020 | تم التصمم بواسطة <br /><a href="https://advertizer.com.eg/" target="_blank">شركة أدفرتيزر للتسويق الإلكتروني</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--====== FOOTER FOUR PART ENDS ======-->

        <!--====== BACK TOP TOP PART START ======-->
        <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>
        <!--====== BACK TOP TOP PART ENDS ======-->

        <!--====== jquery js ======-->
        <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

        <!--====== Bootstrap js ======-->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/popper.min.js"></script>

        <!--====== Slick js ======-->
        <script src="assets/js/slick.min.js"></script>

        <!--====== Isotope js ======-->
        <script src="assets/js/isotope.pkgd.min.js"></script>

        <!--====== Images Loaded js ======-->
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>

        <!--====== Magnific Popup js ======-->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>

        <!--====== Scrolling js ======-->
        <script src="assets/js/scrolling-nav.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>

        <!--====== wow js ======-->
        <script src="assets/js/wow.min.js"></script>

        <!--====== Main js ======-->
        <script src="assets/js/main.js"></script>
</body>

</html>
