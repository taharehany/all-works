<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8">
        <title>سلطان البلح || للحلويات</title>
        <meta name="description" content="">
        <meta name="author" content="TaHa">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/fav.png" type="image/icon" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/icofont.min.css">
        <link rel="stylesheet" href="css/icofonts.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body> 
        <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
              <a class="navbar-brand" href="index.html"><img src="img/logo-right.png"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav">
                    <a class="nav-item nav-link order-5 active" href="index.html">الرئيسية<span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link order-4" href="#about">سلطان البلح</a>
                    <a class="nav-item nav-link order-3" href="#products">منتجاتنا</a>
                    <a class="nav-item nav-link order-1" href="#contact-info">تواصل معنا</a>
                </div>
              </div>
            </div>
        </nav>

        <style>
            body {
                text-align: center
            }
            .navbar-nav .nav-link {
                color: #000!important
            }
            #footer-copyright {
                position: absolute;
                bottom: 0;
                width: 100%;
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
                                mail($email,"soltan albalah landing page",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت .. شكرا لك ");
                            }
                        }
                        ?>
                        </h3>
                    </header>
                </div>
            </section><!-- #contact -->
        </main>

        <!-- Start: Footer Copyright -->
        <section id="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 text-lg-center text-center copyright-text"><p>جميع الحقوق محفوظة &copy; 2019 | تم التصميم بواسطة <a target="_blank" href="https://advertizer.sa.com/">أدفرتيزر</a></p></div>
                </div>
            </div>
        </section>
        <!-- End: Footer Copyright -->    
            
        </div>    
        <!-- scripts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mauGallery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>