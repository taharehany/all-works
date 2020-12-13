<!doctype html>
<html lang="ar">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>جووي آند ليرن</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/lightgallery.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148588528-14"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    
    gtag('config', 'UA-148588528-14');
    </script>
</head>

<body>
    <div class="body_bg">
        <!--::header part start::-->
        <header class="main_menu single_page_menu">
            <div class="container">
                <div class="align-items-center">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
                        <div class="call">
                            <a href="tel:01203900005" class="btn_1"><i class="fas fa-phone"></i> 01203900005</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav" dir="rtl">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">الرئيسية</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">نبذة عنا</a>
                                </li>
                                <!--
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="services.html">خدماتنا</a>
                                </li>
                                -->
                                <li class="nav-item">
                                    <a class="nav-link" href="products.html">منتجاتنا</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="gallery.html">معرض الصور</a>
                                </li>
                                <!--
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="offers.html" >مميزاتنا</a>
                                </li>
                                -->
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">تواصل معنا</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- Header part end-->

        <style>
            body {
                text-align: center;
                height: auto;
            }
            h3 {
                line-height:2;
                color: #222
            }
            .footer_part {
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
                        $email= "Joylearn8@gmail.com";

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
                                mail($email,"joy&learn Page SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت، شكرا لك");
                            }
                        }
                        ?>
                        </h3>
                    </header>
                </div>
            </section><!-- #contact -->
        </main>

        <!--::footer_part start::-->
        <footer class="footer_part">
            <div class="copygight_text">
                <div class="container">
                    <div class="align-items-center">
                        <div class="copyright_text text-center">
                            <p>جميع الحقوق محفوظة 2020 &copy; تصميم وتطوير <br /><a href="http://advertizer.com.eg/" target="_blank">شركة ادفرتيزر للتسويق الإلكتروني</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <script src="js/lightgallery.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.min.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>