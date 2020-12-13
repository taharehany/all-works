<!doctype html>
<html lang="ar">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap Min CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- IcoFont Min CSS -->
        <link rel="stylesheet" href="assets/css/icofont.min.css">
        <!-- Owl Carousel Min CSS -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- Owl Theme Default Min CSS -->
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- Magnific Popup Min CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- Jquery UI CSS -->
        <link rel="stylesheet" href="assets/css/jquery.ui.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/lightgallery.css">
        
        <link rel="stylesheet" href="assets/css/style-over.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">

        <title>التقوي</title>
		
		<link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>
    
    <body>
        <div class="wrapper">

        <!-- Main header -->
        <header class="main-header">
            <!-- Header info text-->
            <div class="header-info-text"> 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-8 col-lg-6"> 
                            <ul class="contact-info"> 
                                <li>
                                    <i class="icofont-phone"></i> 
                                     <a href="tel:01006456325">01006456325</a>
                                </li>
                                <li>
                                    <i class="icofont-send-mail"></i> 
                                     info@altaqwa.com
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-4 col-lg-6"> 

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header info text -->

            <!-- Navbar -->
            <div class="navbar-container header-sticky">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logo.png" alt="Logo">
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto" dir="rtl">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">الرئيسية</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">عن الشركة</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#clients">أفضل الماركات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#call">اتصل بنا</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#products">منتجاتنا</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">تواصل معنا</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- End Navbar -->
        </header>
        <!-- End Main header -->

        <style>
            body {
                text-align: center;

            }
            main h3 {
                padding-top: 5%;
                line-height: 2;
                color: #156282
            }
            .navbar {
                background-color: rgba(191, 191, 191, 0.7);

            }
            .header-info-text {
                display: none
            }
            footer.copy {
                padding: 30px 0;
                position: absolute;
                width: 100%;
                bottom: 0;
                background-color: #CCC;
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
                                mail($email,"Alammari landing page",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت .. شكرا لك ");
                            }
                        }
                        ?>
                        </h3>
                    </header>
                </div>
            </section><!-- #contact -->
        </main>

        <!-- Footer -->
        <footer class="copy">
            <div class="container">
                <div class="row bottom-footer text-center">
                    <div class="col-md-12 col-lg-12">
                        <p>جميع الحقوق محفوظة &copy; تم التصميم بواسطة <a href="" target="_blank">أدفرتيزر</a></p>
                    </div>
                </div>
            </div>  
        </footer>
        <!-- End Footer -->
		</div>
        <!-- Jquery Min JS -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Owl Carousel Min JS -->
       
    </body>
</html>