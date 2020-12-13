<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Industrial Gelatine">
    <meta name="keywords" content="">
    <meta name="author" content="Advertizer">
    <title>Ehab El Amin For Gelatine</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-over.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

<div class="preloader"><div class="spinner"></div></div>
<div class="page-wrapper">
    <header class="header header-home-three">
        <nav class="navbar navbar-default header-navigation stricky">
            <div class="container clearfix">
                <div class="navbar-header">
                    <button class="side-nav-toggler side-nav-opener"><i class="fa fa-bars"></i></button>
                </div>
                <div class="collapse navbar-collapse main-navigation mainmenu " id="main-nav-bar">
                    <ul class="nav navbar-nav navigation-box">
                        <ul class="nav navbar-nav navigation-box">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <a href="service.html">Services</a>
                            </li>
                            <li>
                                <a href="products.html">Products</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact Us</a>
                            </li>
                        </ul>
                    </ul>                
                </div>
                <div class="logo right-side-box">
                    <a href="index.html"><img src="img/logo-page.webp" alt="Awesome Image"/></a>
                </div>
            </div>
        </nav>   
    </header>

    <style>
        body {
            text-align: center
        }
        main h3 {
            line-height: 1.5
        }
        .header-navigation .container .right-side-box {
            background-color: #FFF
        }
        @media (max-width: 991px){
            footer.site-footer.fixed-footer {
                position: fixed;
        }
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
                            mail($email,"gelain website SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                            echo("Your message has been received and you are communicating with you..");
                        }
                    }
                    ?>
                    </h3>
                </header>
            </div>
        </section><!-- #contact -->
    </main>

    <!-- copyright Section -->
    <footer class="site-footer fixed-footer">
        <div class="bottom-footer">
            <div class="container">
                <div class="left-text pull-left"><p>Copyright &copy; 2019 | All right reserved</p></div>
                <div class="right-text pull-right"><p>Created by <a target="_blank" href="http://advertizer.com.eg">Advertizer</a></p></div>
            </div>
        </div>
    </footer>
    
    <section class="hidden-sidebar side-navigation">
        <a href="#" class="close-button side-navigation-close-btn fa fa-times"></a>
        <div class="sidebar-content">
            <div class="top-content side_logo">
                <a href="index.html"><img src="img/logo-page.webp" alt="Awesome Image"/></a>
            </div>
            <nav class="nav-menu middle-content">
                <ul class="navigation-box">
                    <li class="current">
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About Us</a>
                    </li>
                    <li>
                        <a href="service.html">Services</a>
                    </li>
                    <li>
                        <a href="project.html">Products</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
              
    </div> 
    <script async src="js/jquery.js"></script>
    <script async src="js/bootstrap.min.js"></script>
    <script async src="js/owl.carousel.min.js"></script>
    <script async src="js/jquery.magnific-popup.min.js"></script>
    <script async src="js/custom.js"></script>
</body>
</html>