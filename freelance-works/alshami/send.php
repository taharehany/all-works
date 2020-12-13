<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8">
        <title>شركة الشامي لتأجير السيارات</title>
        <meta name="description" content="">
        <meta name="author" content="TaHa">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/swiper.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
     
        <script src="https://kit.fontawesome.com/d6d117068c.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" media="screen" href="css/style.css">
        <link rel="stylesheet" media="screen" href="css/responsive.css">
    </head>
    <body>
        <div class="wrapper">
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
                        <ul class="nav navbar-nav navbar-right justify-content-center">
                            <li class="number"><a href="tel:01222223737">01222223737</a></li>
                        </ul>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav" dir="rtl">
								<li class="nav-item active"><a class="nav-link" href="index.html">الرئيسية</a></li> 
								<li class="nav-item"><a class="nav-link" href="#about-us">نبذة عنا</a></li> 
								<li class="nav-item"><a class="nav-link" href="#models">نماذج</a></li> 
								<li class="nav-item"><a class="nav-link" href="#clients">عملائنا</a></li> 
								<li class="nav-item"><a class="nav-link" href="#contact">تواصل معنا</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->

        <style>
            body {
                text-align: center;
            }
            .header_area {
                box-shadow: 2px 2px 17px #ecececee;
            }
            h3 {
                direction:rtl;
                line-height:1.8;
            }
            .footer-area {
                position: absolute;
                width: 100%;
                bottom: 0;
            }
        </style>

        <!-- /menubar -->
        <main id="main"  style="margin-top:150px">
            <section>
                <div class="container">
                    <header class="section-header">
                        <h3>
                        <?php
                        $email= "ryhanytaha@gmail.com";

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
                                mail($email,"cars Landing Page SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت ..");
                            }
                        }
                        ?>
                        </h3>
                    </header>
                </div>
            </section><!-- #contact -->
        </main>

        <!-- ***** Footer Area Start ***** -->
        <footer class="footer-area text-center" dir="rtl">
            <div class="container">
                <div class="copyright-text justify-content-center">
                    <p>جميع الحقوق محفوظة &copy; تصميم <a href="http://taha-rehany.site/" target="_blank">الريحاني</a></p>
                </div>
            </div>
        </footer>
            
        </div>
        <!-- scripts -->
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/swiper.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>