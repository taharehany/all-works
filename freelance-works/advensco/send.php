<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Advensco | Point Of Sale</title>
    <link rel="icon" href="icon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/icons/styles.css">
    <link rel="stylesheet" href="assets/Swiper-3.4.2/dist/css/swiper.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet/less" href="css/styles.less">
</head>

<body class="point-page">
    <div class="mobile-menu">
        <div class="logo"> <img src="images/logo.png" alt=""> </div>
        <hr>
        <ul>
            <li><a class="scroll" href="index.html#header">Home</a></li>
            <li><a class="scroll" href="index.html#about">About Us</a></li>
            <li><a class="scroll" href="index.html#services">Our Services</a></li>
            <li><a class="scroll" href="index.html#why-us">Why Us?</a></li>
            <li><a class="scroll" href="index.html#our-technology">Our Technology</a></li>
            <li><a href="point-sale.html">Point Of Sale</a></li>
            <li><a class="scroll" href="index.html#our-clients">Our Clients</a></li>
            <li><a class="scroll" href="index.html#contact">Contact Us</a></li>
        </ul>
        <div class="social">
            <div class="icons"> <a href="https://www.facebook.com/ADVENSCOTECH/"><span class="ico-7"></span></a> <a href="https://twitter.com/"><span class="ico-6"></span></a> <a href="https://www.linkedin.com/"><span class="ico-2"></span></a> </div>
        </div>
    </div>

    <section class="header" id="header">
        <div class="mobile-menu-bar"> <img src="images/logo.png" alt="" class="logo">
            <div class="menu-toggle">
                <div class="menu-toggle-inner"></div>
            </div>
        </div>
        <div class="desktop-menu">
            <ul>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-1">
                            <li><a href="index.html" class="logo"><img src="images/logo.png" alt=""></a></li>
                        </div>
                        <div class="col-md-11 text-right">
                            <li><a class="scroll" href="#header">Home</a></li>
                            <li><a class="scroll" href="#about">About Us</a></li>
                            <li><a class="scroll" href="#services">Our Services</a></li>
                            <li><a class="scroll" href="#why-us">Why Us?</a></li>
                            <li><a class="scroll" href="#our-technology">Our Technology</a></li>
                            <li><a href="point-sale.html">Point Of Sale</a></li>
                            <li><a class="scroll" href="#our-clients">Our Clients</a></li>
                            <li><a class="scroll" href="#contact">Contact Us</a></li>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </section>
    <!-- Header part end-->

    <style>
        body {
            text-align: center;
        }

        h3 {
            direction: ltr;
            line-height: 2;
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
                    $email= "Nassar@advensco.com";

                    if (!empty($_POST)){

                        if(empty($_POST['name']) or empty($_POST['tel']) or empty($_POST['email']) or empty($_POST['message'])){
                            echo("You did not fill in all the fields <br>");
                        }
                        
                        
                        $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
                            if(!preg_match($regex, $_POST['email'])){
                                echo("Wrong email");
                            }
                        else{
                            $message  = "name :\n{$_POST["name"]}\n";
                            $message .= "number :\n{$_POST["tel"]}\n";
                            $message .= "email :\n{$_POST["email"]}\n";
                            $message .= "message :\n{$_POST["message"]}\n";
                            $message .= "IP :\n{$_SERVER['REMOTE_ADDR']}\n";
                            $message = stripslashes($message);
                            $message = wordwrap($message, 70);
                            mail($email,"SMS from Advensco:",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                            echo("Your message has been received and we will contact you shortly ..");
                        }
                    }
                    ?>
                    </h3>
                </header>
            </div>
        </section><!-- #contact -->
    </main>

    <footer>
        <div class="container-fluid">
            <p class="text-center" key="footer">© 2017 Advensco All Rights Reserved</p><a href="#header" id="up" class="scroll"><i class="ico-109"></i></a>
        </div>
    </footer>
    <script src="js/jquery-2.2.4.min.js" charset="utf-8"></script>
    <script src="assets/Swiper-3.4.2/dist/js/swiper.min.js"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="js/jquery.counterup.min.js" charset="utf-8"></script>
    <script src="js/less.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script src="js/custom.js" charset="utf-8"></script>
    <script src="js/script.js" charset="utf-8"></script>
    <script src="langs/change-lang.js" charset="utf-8"></script>
</body>

</html>
