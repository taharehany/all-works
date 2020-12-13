<!doctype html>
<html lang="ar">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>عيادة دكتور خالد منسي || لطب الأسنان</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/overstyle.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="img/logo-2.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent" dir="rtl">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="index.html">الرئيسية</a></li> 
                            <li class="nav-item"><a class="nav-link" href="index.html#about">نبذة عنا</a></li> 
                            <li class="nav-item"><a class="nav-link" href="index.html#services">خدماتنا</a></li> 
                            <li class="nav-item"><a class="nav-link" href="index.html#offers">عروضنا</a></li>    
                            <li class="nav-item"><a class="nav-link" href="index.html#works">أعمالنا</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.html#contact">تواصل معنا</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <style>
        header {
            box-shadow: 1px 1px 2px #DDD
        }
        body {
            text-align: center;
            height: auto;
        }
        h3 {
            direction:rtl;
            line-height:2;
            text-align: center;
            font-size: 23px;
            box-shadow: none
        }
        footer{
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
                    $email= "drkhalidmansi8@gmail.com";

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
                            mail($email,"dr-ahmed nabil landing page",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                            echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت ..");
                        }
                    }
                    ?>
                    </h3>
                </header>
            </div>
        </section><!-- #contact -->
    </main>

    <!-- start footer Area -->
    <footer class="footer-area ">
        <div class="container">
            <div class="row footer-bottom d-flex justify-content-between">
                <p class="col-lg-12 col-sm-12 footer-text text-center">
                    جميع الحقوق محفوظة &copy; 2019 | تم التصميم بواسطة <a href="http://advertizer.com.eg" target="_blank">شركة أدفرتيزر للتسويق الإلكتروني</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="js/theme.js"></script>
</body>
</html>