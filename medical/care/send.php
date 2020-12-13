<!DOCTYPE html>
<html lang="ar">
<head>
    <title>مجمع الرعاية التامة الطبي</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
    <link href="styles/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="styles/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="styles/animate.css">
    <link href="styles/jquery-ui.css" rel="stylesheet" type="text/css">
    <link href="styles/contact.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>
	
	<!-- Header -->
	<header class="header trans_400">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">
			<!-- Logo -->
			<div class="logo">
				<a href="#">
					<div>Dr<span>CARE</span></div>
					<div>Dental clinic</div>
				</a>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav" dir="rtl">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li class="active"><a href="index.html">الرئيسية</a></li>
					<li><a href="index.html#about">نبذة عنا</a></li>
					<li><a href="index.html#services">خدماتنا</a></li>
					<li><a href="index.html#offers">عروضنا</a></li>
					<li><a href="index.html#contact">تواصل معنا</a></li>
				</ul>
			</nav>
			<div class="header_extra d-flex flex-row align-items-center justify-content-end" dir="rtl">
                <!-- Header Phone -->
				<div class="header_phone">+966 056 304 8952</div>
				<!-- Appointment Button -->
				<div class="button button_1 header_button" dir="ltr"><a href="tel:+966 056 304 8952"><i class="fa fa-phone"></i>+966 056 304 8952</a></div>
				<!-- Hamburger -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu_overlay trans_400"></div>
	<div class="menu trans_400 text-right">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<nav class="menu_nav" dir="rtl">
			<ul>
				<li class="active"><a href="index.html">الرئيسية</a></li>
                <li><a href="index.html#about">نبذة عنا</a></li>
                <li><a href="index.html#services">خدماتنا</a></li>
                <li><a href="index.html#offers">عروضنا</a></li>
                <li><a href="index.html#contact">تواصل معنا</a></li>
			</ul>
		</nav>
	</div>
    <!-- Header part end-->

    <style>
        .header {
            box-shadow: 1px 1px 2px #DDD
        }
        body {
            text-align: center;
            height: auto;
        }
        h3 {
            direction:rtl;
            line-height:2;
            text-align: center;
            font-size: 23px
        }
        .footer{
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
                            mail($email,"مجمع الرعاية التامة الطبي",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                            echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت ..");
                        }
                    }
                    ?>
                    </h3>
                </header>
            </div>
        </section><!-- #contact -->
    </main>

    <footer class="footer">
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content">
							<div class="copyright" dir="rtl">
                             جميع الحقوق محفوظة | تم التصمم بواسطة  <a href="https://advertizer.sa.com/" target="_blank">شركة أدفرتيزر للتسويق الإلكتروني</a>
                            </div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</footer>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/ScrollMagic.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/custom.js"></script>


<!-- WhatsHelp.io widget -->
<script type="text/javascript" >
    (function () {
        var options = {
            whatsapp: "+966563048952", // WhatsApp number
            call_to_action: "", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->    
    
</body>
</html>