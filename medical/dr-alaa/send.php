<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Website Title -->
    <title>مركز رويال لطب الاسنان || د.علاء القطان</title>
    <!-- Styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/over-style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!--<a class="navbar-brand logo-text page-scroll" href="index.html"><span>DR</span>Alaa Elkattan</a>-->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html">
            <img class="base-logo" src="images/logo.png" alt="">
            <img class="white-logo" src="images/logo-w.png" alt="">
        </a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto" dir="rtl">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">الرئيسية <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.html#about">نبذة عنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.html#clients-op">عملائنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.html#clients">آراء العملاء</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.html#services">خدماتنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.html#pricing">عروضنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.html#contact">تواصل معنا</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end of navigation -->

    <style>
        .navbar-custom {
            padding: 0.5rem 1.5rem 0.5rem 2rem;
            box-shadow: 0 0.0625rem 0.375rem 0 rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        .navbar-custom .nav-item .nav-link {
            color: #000
        }
        body {
            text-align: center;
            height: auto;
        }
        h3 {
            direction:rtl;
            line-height:2;
        }
        .copyright {
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
                            mail($email,"dr-Alaa Elkattan Landing Page SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                            echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت ..");
                        }
                    }
                    ?>
                    </h3>
                </header>
            </div>
        </section><!-- #contact -->
    </main>

    <!-- Copyright -->
    <div class="copyright" dir="rtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">
                        جميع الحقوق محفوظة &copy; 2020 | تم التصميم بواسطة <br />
                        <a href="http://advertizer.com.eg" target="_blank">شركة أدفرتيزر للتسويق الإلكتروني</a>
                    </p>
                </div>
            </div> <!-- enf of row -->
        </div>
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>