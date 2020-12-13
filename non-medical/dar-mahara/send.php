<!DOCTYPE html>
<html lang="ar">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="Cleaning" />
	<meta name="robots" content="" />
	<meta name="description" content="تنظيف الفلل الجديدة + مكافحة الحشرات + جلي الرخام + غسيل السجاد "/>
    
    <meta property="og:url" content="https://daralmhara.com/"/>
    <meta property="og:site_name" content="شركة دار المهارة للتنظيفات"/>
    <meta property="og:title" content="تنظيفات ومكافحة لحشرات دار المهارة"/>
    <meta property="og:description" content="تنظيفات جلي رخام مكافحة حشرات"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="http://img1.wsimg.com/isteam/stock/Y8d5EAY"/>
    <meta property="og:locale" content="en_AE"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@dar_almhara?lang=ar"/>
    <meta name="twitter:title" content="شركة دار المهارة للتنظيفات"/>
    <meta name="twitter:description" content="تنظيفات ومكافحة لحشرات دار المهارة"/>
    <meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/Y8d5EAY"/>
    <meta name="twitter:image:alt" content="شركة دار المهارة للتنظيفات"/>
	<!-- Favicons Icon -->
	<link rel="icon" href="images/favicon.png" type="image/x-icon" />
	<!-- Page Title Here -->
	<title>شركة دار المهارة للتنظيفات</title>
	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
	<link rel="stylesheet" type="text/css" href="css/templete.css">
    <link rel="stylesheet" type="text/css" href="css/over-style.css">
</head>
<body id="bg">
<div id="loading-area"></div><div class="page-wraper">
    <!-- header -->
    <header class="site-header header-style-1 mo-left dark">
        <!-- main header -->
        <div class="sticky-header header header-curve main-bar-wraper navbar-expand-lg">
            <div class="main-bar bg-primary clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion"><a href="index.html"><img src="images/logo.png" width="193" height="89" alt=""></a></div>
					<!-- nav toggle button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <div class="extra-nav disnone-md hidden-md">
                        <div class="extra-cell">
                            <a href="tel:+2 0111 096 7779" class="site-button white skew-secondry">+2 0111 096 7779</a>
                        </div>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        <ul class=" nav navbar-nav" dir="rtl">
							<li class="active"> <a href="">الرئيسية</a></li>
							<li> <a href="about.html">من نحن</a></li>
							<li> <a href="services.html">خدماتنا</a></li>
							<li> <a href="">معرض الصور</a></li>
							<li> <a href="contact.html">تواصل معنا</a></li>
						</ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>

    <style>
        body {
            text-align: center;
            height: auto;
        }
        h3 {
            direction:rtl;
            line-height:2;
        }
        footer{
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
                            mail($email,"dar-almahara Landing Page SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                            echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت ..");
                        }
                    }
                    ?>
                    </h3>
                </header>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="site-footer clear-sef-footer text-right" dir="rtl">
        <div class="footer-bottom text-center">
            <div class="container">
                <div class="row">
					<div class="col-md-12 text-center"> <span> جميع الحقوق محفوظة <i class="fa fa-heart text-red heart"></i> تم التصميم بواسطة <a href="http://advertizer.com.eg" target="_blank">أدفرتيزر</a> </span> </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up" ></button>
    </div>
    <!-- JavaScript  files ========================================= -->
    <script src="js/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/popper.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="plugins/magnific-popup/magnific-popup.js"></script>
    <script src="plugins/counter/waypoints-min.js"></script>
    <script src="plugins/counter/counterup.min.js"></script>
    <script src="plugins/imagesloaded/imagesloaded.js"></script>
    <script src="plugins/masonry/masonry-3.1.4.js"></script>
    <script src="plugins/masonry/masonry.filter.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/dz.carousel.js"></script>
    <script src="plugins/switcher/js/switcher.js"></script>
    <script src="js/dz.ajax.js"></script>
</body>
</html>
