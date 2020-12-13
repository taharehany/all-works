<!doctype html>
<html lang="ar">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>عيادة الدكتوة هبة حوري لطب الأسنان</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/all.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/over-style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <style>
        .main_menu {
            position: fixed;
            z-index: 9999 !important;
            width: 100%;
            background-color: #fff;
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.05);
            top: 0
        }
        .footer-area {
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
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="img/logo2.png" alt="logo"> </a>
                        <div class="menu_btn">
                            <a href="tel:050 996 9825" class="btn_1">050 996 9825</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav" dir="rtl">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">الرئيسية</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html#about">نبذة عنا</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html#services">خدماتنا</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html#clients">عملائنا</a>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html#works">أعمالنا</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html#contact">نواصل معنا</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
        
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
                                mail($email,"dr-heba landing page SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت، شكرا لك");
                            }
                        }
                        ?>
                    </h3>
                </header>
            </div>
        </section><!-- #contact -->
    </main>



    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="copyright_part_text">
                <p class="footer-text m-0 text-center">
                 جميع الحقوق محفوظة 2019 &copy; تصميم وتطوير<br /><a  href="https://advertizer.sa.com/" target="_blank">شركة ادفرتيزر للتسويق الإلكتروني</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>