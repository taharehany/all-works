<!doctype html>
<html lang="ar">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>عربيتي</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/over-style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

<div class="site-main">
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav justify-content-center">
                            <li class="nav-item active"><a class="nav-link" href="index.html">الرئيسية</a></li> 
                            <li class="nav-item"><a class="nav-link" href="index.html#about">توفاست</a></li> 
                            <li class="nav-item"><a class="nav-link" href="index.html#models">نماذج السيارات</a>
                            <li class="nav-item"><a class="nav-link" href="index.html#advant">المميزات</a>
                            <li class="nav-item"><a class="nav-link" href="index.html#services">خدماتنا</a>
                            <li class="nav-item"><a class="nav-link" href="index.html#contact">تواصل معنا</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="call-us"><a href="tel:+201033287772"><i class="ti-headphone-alt"></i>+20 103 328 7772</a></li>
                        </ul>
                    </div> 
                </div>
            </nav>
        </div>
    </header>
    <!--Header Menu Area -->

    <style>
        .nav-bar {
            position: relative;
        }
        body {
            text-align: center;
            height: auto;
        }
        h3 {
            direction:rtl;
            line-height:2;
        }
        .footer-area {
            position: absolute;
            width: 100%;
            bottom: 0;
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
                            mail($email,"too fast Landing Page SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                            echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت ..");
                        }
                    }
                    ?>
                    </h3>
                </header>
            </div>
        </section><!-- #contact -->
    </main>

    <!--  start footer Area  -->
        <footer class="footer-area">
            <div class="container">
                <div class="footer-bottom align-items-center text-center">
                    <div class="copy-right text-center">جميع الحقوق محفوظة | تم التصميم بواسطة <a href="http://advertizer.com.eg" target="_blank">أدفرتيزر</a></div>
                </div>
            </div>
        </footer>
        <!--  End footer Area  -->
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/theme.js"></script>
</body>
</html>