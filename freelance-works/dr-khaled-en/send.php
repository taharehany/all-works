<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dr. Khaled Mansi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/slicknav.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-3">
                                <div class="logo">
                                    <a href="http://drkhalidmansy.com/en/">
                                        <img class="lazyload" data-src="img/small.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="http://drkhalidmansy.com/en/">home</a></li>
                                            <li><a href="#about">about us</a></li>
                                            <li><a href="#works">works</a></li>
                                            <li><a href="#services">services</a></li>
                                            <li><a href="#offers">offers</a></li>
                                            <li><a href="#contact">contact us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="buy_tkt">
                                    <div class="book_btn d-none d-lg-block">
                                        <a href="tel:01125555207">call us now</a>
                                        <a href="http://drkhalidmansy.com/">العربية</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    
    <style>
        .header-area .main-header-area {
            box-shadow: 0px 3px 16px 0px rgba(0, 0, 0, 0.1)
        }
        .footer {
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
                        $email= "drkhalidmansi8@gmail.com";

                        if (!empty($_POST)){

                            if(empty($_POST['name']) or empty($_POST['tel']) or empty($_POST['email']) or empty($_POST['message'])){
                                echo("You have not filled in all the fields <br>");

                            }
                            $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
                            if(!preg_match($regex, $_POST['email'])){
                                echo("Wrong mail");

                            }
                            else{
                                $message  = "name :\n{$_POST["name"]}\n";
                                $message .= "mobile :\n{$_POST["tel"]}\n";
                                $message .= "mail :\n{$_POST["email"]}\n";
                                $message .= "message :\n{$_POST["message"]}\n";
                                $message .= "IP :\n{$_SERVER['REMOTE_ADDR']}\n";
                                $message = stripslashes($message);
                                $message = wordwrap($message, 70);
                                mail($email,"Dr Khaled Mansy (en) SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                echo("Your message has been received and we will contact you shortly, thank you.");
                            }
                        }
                        ?>
                    </h3>
                </header>
            </div>
        </section><!-- #contact -->
    </main>

    <!-- footer_start  -->
    <footer class="footer">
        <div class="copy-right_text">
            <div class="container">
                <p class="copy_right text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                    all rights are save &copy;<script>
                        document.write(new Date().getFullYear());
                    </script>
                </p>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->

    <!-- JS here -->
    <script src="js/modernizr-3.5.0.min.js"></script>
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/tilt.jquery.js"></script>
    <script src="js/lazysizes.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function() {
            var options = {
                whatsapp: "+201125555207", // WhatsApp number
                call_to_action: "WhatsApp", // Call to action
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