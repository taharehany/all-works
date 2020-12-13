<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="TaHa">
        <link rel="icon" type="image/png" href="img/favicon.png">
        <title>دكتورة رؤى يوسف || عيادة أسنان</title>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/icofonts.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-pages.css">
        <link rel="stylesheet" href="css/responsive.css">
        
        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="css/extralayers.css">
        <link rel="stylesheet" type="text/css" href="css/settings.css">
    </head>
    <body>
          
    <!--  preloader start -->
    <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div>
    <!-- preloader end -->
        
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="img/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-item nav-link active" href="index.html">الرئيسية</a>
                  <a class="nav-item nav-link" href="index.html#about">نبذة عنا</a>
                    <a class="nav-item nav-link" href="index.html#services">خدماتنا</a>
                  <a class="nav-item nav-link" href="index.html#call">العروض</a>
                  <a class="nav-item nav-link" href="index.html#info">تواصل معنا</a>
                </div>
            </div>
        </div>
    </nav> 

        <style>
            .navbar-light .navbar-nav .nav-link {
                color: #666;
            }
            body {
                text-align: center;
                height: auto;
            }
            .navbar {
                background-color: #fff
            }
            h3 {
                direction:rtl;
                line-height:2;
            }
            #footer {
                position: absolute;
                width: 100%;
                bottom: 0;
            }
            .navbar-light .navbar-brand {
                color: #666;
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
                                mail($email,"dr-roaa Landing Page SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت ..");
                            }
                        }
                        ?>
                        </h3>
                    </header>
                </div>
            </section><!-- #contact -->
        </main>

        <!-- copyright Section -->
        <div id="footer" dir="rtl">
          <div class="container">
              <p> جميع الحقوق محفوظة &copy; | تم التصميم بواسطة <a href="https://advertizer.sa.com/" target="_blank">أدفرتيزر</a></p>
          </div>
        </div>
        <!-- end copyright Section -->
        
        <!-- scripts -->
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/script.js"></script>
        
        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script src="js/jquery.themepunch.revolution.min.js"></script>
        <script src="js/jquery.themepunch.tools.min.js"></script>
    </body>
</html>