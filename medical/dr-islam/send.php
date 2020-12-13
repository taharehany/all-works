<!doctype html>
<html lang="ar">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>عيادة الدكتورة إسلام سليمان</title>
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
</head>

<body>
    <div class="wrapper">
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html">Dr/Islam</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav" dir="rtl">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">الرئيسية</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html#about">نبذة مختصرة</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html#service">خدماتنا</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html#clients">عملائنا</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html#contact">تواصل معنا</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <style>
        .main_menu {
            box-shadow: 1px 1px 2px #DDD
        }
        body {
            text-align: center;
            height: auto;
        }
        h3 {
            direction:rtl;
            line-height:2;
            text-align: center
        }
        footer {
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
                            mail($email,"dr-Islam Landing Page SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                            echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت ..");
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <p class="footer-text m-0">
                            جميع الحقوق محفوظة | تم التصمم بواسطة  <a href="https://advertizer.sa.com/" target="_blank">شركة أدفرتيزر للتسويق الإلكتروني</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->
    </div>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="css/all.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/over-style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <script src="js/jquery-1.12.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    
    <!-- WhatsHelp.io widget -->
    <script type="text/javascript" >
        (function () {
            var options = {
                whatsapp: "+966530941878", // WhatsApp number
                call_to_action: "", // Call to action
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /WhatsHelp.io widget -->
    
</body>

</html>