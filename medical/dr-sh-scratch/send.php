<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>عيادة الدكتورة شيماء</title>
        <meta name="description" content="">
        <meta name="author" content="TaHa">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/icofonts.min.css">
        <link rel="stylesheet" media="screen" href="css/style.css">
    </head>
    <body>
        <!-- Header Nav Start -->
        <header dir="ltr">
            <nav class="navbar navbar-inverse navbar-expand-lg header-nav fixed-top light-header">
                <div class="container">
                   <a class="navbar-brand" href="index.html">
                      <img src="img/logo.png" alt="logo">
                   </a>
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCodeply">
                   <i class="icofont icofont-navigation-menu"></i>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarCodeply" dir="rtl">
                      <ul class="nav navbar-nav ml-auto">
                         <li><a class="nav-link active" data-scroll="home" href="index.html"><i class="icofont icofont-home"></i> الرئيسية</a> </li>
                         <li><a class="nav-link" data-scroll="about" href="index.html#about">نبذة عنا</a></li>
                         <li><a class="nav-link" data-scroll="social" href="index.html#services">خدماتنا</a></li>
                         <li><a class="nav-link" data-scroll="clients" href="index.html#offers">العروض</a></li>
                         <li><a class="nav-link" data-scroll="contact" href="index.html#contact">تواصل معنا</a></li>
                      </ul>
                   </div>
                </div>
            </nav>
        </header>
        <!-- Header Nav End -->

        <style>
            body {
                text-align: center;
            }
            h3 {
                direction:rtl;
                line-height:1.8;
            }
            footer {
                position: absolute;
                width: 100%;
                bottom: 0;
            }
        </style>

        <!-- /menubar -->
        <main id="main" style="margin-top: 150px;">
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
                                $message .= "التليفون :\n{$_POST["tel"]}\n";
                                $message .= "البريد الإلكتروني :\n{$_POST["email"]}\n";
                                $message .= "الرسالة :\n{$_POST["message"]}\n";
                                $message .= "أي بي :\n{$_SERVER['REMOTE_ADDR']}\n";
                                $message = stripslashes($message);
                                $message = wordwrap($message, 70);
                                mail($email,"dr-shaimaa mansour Landing Page SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت ..");
                            }
                        }
                        ?>
                        </h3>
                    </header>
                </div>
            </section><!-- #contact -->
        </main>

        <!-- Footer Start -->
        <footer id="footer" class="footer" dir="rtl">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="footer-copyright text-center">
                            <p>تم التصميم بواسطة <a href="http://advertizer.com.eg" target="_blank">شركة أدفرتيزر</a> <i class="icofont icofont-ui-love"></i>  جميع الحقوق محفوظة &copy; 2019</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->
        
        <!-- scripts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>