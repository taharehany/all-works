<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Elnahass Dental Clinic &#8211; Dental Services</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
        <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="styles/owl/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="styles/owl/owl.theme.default.css">
        <link rel="stylesheet" type="text/css" href="styles/owl/animate.css">
        <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
        <link rel="stylesheet" type="text/css" href="styles/over-style.css">
        <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    </head>
<body>

<div class="super_container">
	
	<!-- Header -->
	<header class="header trans_200">
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
							<div class="top_bar_item"><a href="#">info@elnahassdentalclinic.com</a></div>
							<div class="emergencies  d-flex flex-row align-items-center justify-content-start ml-auto">Call Us Now: 0100 265 9854</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<nav class="main_nav ml-auto">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="#about">About us</a></li>
									<li><a href="#services">Services</a></li>
									<li><a href="#works">Works</a></li>
									<li><a href="#contact">Contact</a></li>
								</ul>
							</nav>
							<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Logo -->
		<div class="logo_container_outer">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="logo_container">
							<a href="#">
								<div class="logo_content d-flex flex-column align-items-start justify-content-center">
									<div class="logo_line"></div>
									<div class="logo d-flex flex-row align-items-center justify-content-center">
										<div class="logo_text">El-Nahass<br /><span></span></div>
									</div>
									<div class="logo_sub">Dental Clinic</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>	
		</div>

	</header>

	<!-- Menu -->

	<div class="menu_container menu_mm">
		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>
		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
                    <li class="menu_item menu_mm"><a href="index.html">Home</a></li>
                    <li class="menu_item menu_mm"><a href="index.html#about">About us</a></li>
                    <li class="menu_item menu_mm"><a href="index.html#services">Services</a></li>
                    <li class="menu_item menu_mm"><a href="index.html#works">Works</a></li>
                    <li class="menu_item menu_mm"><a href="index.html#contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>

        <style>
            body {
                text-align: center;
                height: auto;
            }
            h3 {
                line-height:2;
            }
            footer {
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
                                mail($email,"dr-hani Landing Page SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                echo("Your message has been received and will be contacted as soon as possible ..");
                            }
                        }
                        ?>
                        </h3>
                    </header>
                </div>
            </section><!-- #contact -->
        </main>

        <!-- Footer -->
	<footer class="footer">
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="copyright_content d-flex flex-lg-row flex-column align-items-lg-center justify-content-center">
							<div class="cr">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by <a href="http://advertizeragency.com/" target="_blank">Advertizer</a>
                            </div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/compare.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>