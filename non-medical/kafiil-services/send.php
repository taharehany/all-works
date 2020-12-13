<!doctype html>
<html class="no-js" lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>كفيل</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/hamburgers.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/over-style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="https://kit.fontawesome.com/d6d117068c.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/kafiil_logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/kafiil_logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="main-menu black-menu menu-bg-white d-none d-lg-block">
                                <!--<div class="hamburger hamburger--collapse">
									<div class="hamburger-box">
										<div class="hamburger-inner"></div>
									</div>
								</div>-->
                                <nav class="hamburger-menu nav-menu-show">
                                    <ul id="navigation" dir="rtl">
                                        <li><a href="index.html">الرئيسية</a></li>
                                        <li><a href="index.html#about">منصة كفيل</a></li>
                                        <li><a href="index.html#services">الخدمات</a></li>
                                        <li><a href="index.html#why">لماذا كفيل؟</a></li>
                                        <li><a href="index.html#clients">عملائنا</a></li>
                                        <li><a href="index.html#contact">تواصل معنا</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <style>
        footer {
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

                            if(empty($_POST['name']) or empty($_POST['tel']) or empty($_POST['email']) or empty($_POST['branch']) or empty($_POST['message'])){
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
                                mail($email,"kafiil Landing Page SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت، شكرا لك");
                            }
                        }
                        ?>
                    </h3>
                </header>
            </div>
        </section><!-- #contact -->
    </main>

    <footer>
        <div class="footer-area  section-bg" data-background="assets/img/gallery/footer_bg.png">
            <div class="container">
                <div class="footer-bottom text-center" dir="rtl">
                    <div class="footer-social">
                        <a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s" href="https://www.facebook.com/KafiilDotCom/" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" href="https://twitter.com/KafiilDotCom" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" href="https://www.linkedin.com/company/kafiildotcom/" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s" href="https://www.instagram.com/kafiildotcom1/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" href="https://www.snapchat.com/add/kafiildotcom" target="_blank">
                            <i class="fab fa-snapchat-ghost"></i>
                        </a>
                        <a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s" href="https://www.youtube.com/channel/UC6EbpTrYpGi__33_uI9pcsA?view_as=subscriber"><i class="fab fa-youtube" target="_blank">
                            </i>
                        </a>
                        <a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s" href="https://t.me/KafiilDotCom" target="_blank">
                            <i class="fab fa-telegram-plane"></i>
                        </a>
                    </div>
                    <p>جميع الحقوق محفوظة لشركة كفيل ذات المسئولية المحدودة &copy; <script>
                            document.write(new Date().getFullYear());

                        </script> <br />تم التصميم بواسطة <a href="http://advertizer.com.eg/" target="_blank"> شركة أدفرتيزر للتسويق الإلكتروني</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/jquery-3.3.1.min.js"></script>
    <script src="./assets/js/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/jquery.magnific-popup.min.js"></script>

    <!-- Date Picker -->
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <script src="./assets/js/smooth-scroll.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function() {
            var options = {
                whatsapp: "+201030381539", // WhatsApp number
                call_to_action: "تواصل معنا", // Call to action
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();

    </script>
    <!-- /GetButton.io widget -->
</body>

</html>
