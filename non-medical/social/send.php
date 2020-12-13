<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8">
        <title>أدفرتيزر | للتسويق الإلكتروني</title>
        <meta name="description">
        <meta author="TaHa" name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/icofonts.min.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/slick-theme.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <div class="wapper">    
    <!-- Preloader Start -->
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>
    <!-- Preloader End -->
    <!-- Header Nav Start -->
    <header id="home" dir="ltr">
        <nav class="navbar navbar-inverse navbar-expand-lg header-nav fixed-top light-header">
            <div class="container">
               <a class="navbar-brand" href="index.html">
                  <img src="img/logo2.png" alt="">
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCodeply">
               <i class="icofont icofont-navigation-menu"></i>
               </button>
               <div class="collapse navbar-collapse" id="navbarCodeply" dir="rtl">
                  <ul class="nav navbar-nav ml-auto">
                     <li><a class="nav-link" href="#home">الرئيسية</a> </li>
                     <li><a class="nav-link" href="#about">أدفرتيزر</a></li>
                     <li><a class="nav-link" href="#social">منصات التسويق</a></li>
                     <li><a class="nav-link" href="#services">خدماتنا</a></li>
                     <li><a class="nav-link" href="#clients">عملائنا</a></li>
                     <li><a class="nav-link" href="#contact">تواصل معنا</a></li>
                  </ul>
               </div>
            </div>
        </nav>
    </header>
    <!-- Header Nav End -->
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
                                mail($email,"Dr. Asmaa Al-Hefnawy Landing Page SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت");
                            }
                        }
                        ?>
                    </h3>
                </header>
            </div>
        </section><!-- #contact -->
    </main>

    <!-- Footer Start -->
    <footer id="footer" class="p-70px-t p-30px-b footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="footer-copyright p-30px-tb text-center">
                        <p>التصميم والتطوير بواسطة<a href="http://advertizer.com.eg/digital-marketing-services/" target="_blank"  >شركة أدفرتيزر</a> <i class="icofont icofont-ui-love"></i> حقوق الموقع &copy; أدفرتيزر  2018. جميع الحقوق محفوظة</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
    </div>    
    <!-- scripts -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>  
    <script src="js/smooth-scroll.min.js"></script>      
    <script src="js/script.js"></script> 
    <script src="js/color-settings.js"></script>
    </body>
</html>