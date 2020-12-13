<!DOCTYPE html>
<html lang="en">
<head>
	<title>شركة حورس لنقل الأثاث</title>
	<meta charset="UTF-8">
	<meta name="description" content="Arcade - Architecture Template">
	<meta name="keywords" content="arcade, architecture, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/fav.png" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/over-style.css"/>
    <link rel="stylesheet" href="css/responsive.css"/>
    <script src="https://kit.fontawesome.com/d6d117068c.js"></script>
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section start -->   
	<header class="header-area">
		<a href="index.html" class="logo-area">
			<img src="img/logo.png" alt="">
		</a>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<div class="phone-number"><a href="tel:01141189403">01141189403</a></div>
		<nav class="nav-menu" dir="rtl">
			<ul>
				<li class="active"><a href="index.html">الرئيسية</a></li>
				<li><a href="index.html#about">من نحن</a></li>
				<li><a href="index.html#services">خدماتنا</a></li>
				<li><a href="index.html#cta">اطلب خدماتنا</a></li>
				<li><a href="index.html#contact">تواصل معنا</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end --> 
        
        <style>
            body {
                text-align:center;
                padding-top:50px;
            }
            h3 {
                line-height:2;
            }
            .header-area {
                background-color: #000
            } 
            .footer-section {
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
                            $email= "ibrahim.abdelaziz30@gmail.com";

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
                                    mail($email,"Horus landing SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                    echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت");
                                }
                            }
                            ?>
                        </h3>
                    </header>
                </div>
            </section><!-- #contact -->
        </main>



    <!-- Footer section start -->
	<footer class="footer-section">
		<div class="container">
			<div class="row">
				<div class="copyright">جميع الحقوق محفوظة © شركة حورس</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.owl-filter.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>