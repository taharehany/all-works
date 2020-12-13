<!DOCTYPE html>
<html lang="ar">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <title>مركز ويلان العلاج الأسنان</title>
        <meta name="description" content="">
        <meta name="author" content="TaHa">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        <div class="wrapper">
            
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
                        <div class="col-lg-auto col">
                            <div class="header-contacts" dir="rtl">
                                <i class="fa fa-phone"></i>
                                <span class="header-contacts__inner">كلمنا الآن!
                                    <a class="header-contacts__number" href="tel:011 226 5141" dir="ltr">011 226 5141
                                    </a>
                                </span>
                            </div>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent" dir="rtl">
                            <ul class="nav navbar-nav menu_nav ml-auto pr-0">
                                <li class="nav-item active"><a class="nav-link" href="index.html">الرئيسية</a></li> 
                                <li class="nav-item"><a class="nav-link" href="index.html#services">خدماتنا</a></li> 
                                <li class="nav-item"><a class="nav-link" href="index.html#offers">عروضنا</a></li>  
                                <li class="nav-item"><a class="nav-link" href="index.html#doctors">أطباء ويلان</a></li> 
                                <li class="nav-item"><a class="nav-link" href="index.html#contact">تواصل معنا</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <style>
            .footer {
                font-size: 16px;
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
                                    $message .= "الموبايل :\n{$_POST["tel"]}\n";
                                    $message .= "البريد الإلكتروني :\n{$_POST["email"]}\n";
                                    $message .= "الفرع :\n{$_POST["branch"]}\n";
                                    $message .= "الرسالة :\n{$_POST["message"]}\n";
                                    $message .= "أي بي :\n{$_SERVER['REMOTE_ADDR']}\n";
                                    $message = stripslashes($message);
                                    $message = wordwrap($message, 70);
                                    mail($email,"weelan landing page SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                    echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت، شكرا لك");
                                }
                            }
                            ?>
                        </h3>
                    </header>
                </div>
            </section><!-- #contact -->
        </main>



	   <!--================ Footer Start =================--> 
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="footer-copyright text-center">
                            <p>جميع الحقوق محفوظة &copy; 2018. تصميم وتطوير <br /><a href="http://advertizer.sa.com/" target="_blank">شركة أدفرتيزر للتسويق الإلكتروني</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--================ Footer End =================-->     
            
        </div>    
        <!-- scripts -->
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>