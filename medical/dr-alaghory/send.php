<!DOCTYPE html>
<html lang="ar">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>دكتور إسلام الأجهوري</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt="" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span> <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto" dir="rtl">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html#about">نبذة عنا</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html#clients">عملائنا</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html#services">خدماتنا</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html#contact">تواصل معنا</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->
    <style>
        .header_area {
            box-shadow: 0px 3px 16px 0px rgba(0, 0, 0, 0.1);
            position: relative
        }

        .footer-area {
            position: absolute;
            width: 100%;
            bottom: 0;
            left: 0
        }

        h3 {
            text-align: center;
            width: 100%;
            line-height: 2
        }

    </style>
    <!-- /menubar -->
    <main style="margin-top: 150px;">
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
                                $message .= "الموبايل :\n{$_POST["tel"]}\n";
                                $message .= "البريد الإلكتروني :\n{$_POST["email"]}\n";
                                $message .= "الفرع :\n{$_POST["branch"]}\n";
                                $message .= "الرسالة :\n{$_POST["message"]}\n";
                                $message .= "أي بي :\n{$_SERVER['REMOTE_ADDR']}\n";
                                $message = stripslashes($message);
                                $message = wordwrap($message, 70);
                                mail($email,"D.r/Islam Al-Aghory Landing Page SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت، شكرا لك");
                            }
                        }
                        ?>
                    </h3>
                </header>
            </div>
        </section><!-- #contact -->
    </main>

    <!--================ Start footer Area  =================-->
    <footer class="footer-area">
        <div class="container">
            <div class="footer-bottom d-flex justify-content-center">
                <p class="footer-text text-center m-0">جميع الحقوق محفوظة &copy;
                    <script>document.write(new Date().getFullYear());</script> تصميم وتطوير <br /><a href="http://advertizer.com.eg/" target="_blank">شركة أدفرتيزر للتسويق الإلكتروني</a>
                </p>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
</body>
</html>
