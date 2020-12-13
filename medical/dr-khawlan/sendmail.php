<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Page Title -->
    <title>المركز الطبي للاسنان </title>

    <!-- Favicon and Touch Icons -->
    <link href="images/favicon/favicon.png" rel="shortcut icon" type="image/png">
    <link href="images/favicon/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="images/favicon/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/favicon/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="images/favicon/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Icon fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <!-- responsive css -->
    <link href="css/responsive.css" rel="stylesheet" >

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        
        <!--start preloader-->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                </div>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        <header id="header" class="site-header header-style-1">

            <div class="topbar">
              

                <div class="lower-topbar">
                    <div class="container">
                        <div class="row">
                            <div class="col col-md-3">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo.png" alt></a>
                                </div>
                            </div>
                            <div class="col col-md-9">
                                <div class="lower-topbar-info-wrapper">
                                    <div class="lower-topbar-info">
                                        <div>
                                            <div class="icon">
                                                <i class="fi flaticon-smartphone"></i>
                                            </div>
                                            <div class="details">
                                                <p>05-984-305-48</p>
                                                
                                            </div>
                                        </div>
                                        <div>
                                            <div class="icon">
                                                <i class="fi flaticon-opened-email-envelope"></i>
                                            </div>
                                            <div class="details">
                                                <p>info@ahmedkholan.com</p>
                                               
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div> <!-- end lower-topbar -->
            </div> <!-- end topbar -->

            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                         <!--<a class="navbar-brand" href="#">Logo</a>-->
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="menu-item-has-children"><a href="#navbar">الرئيسية</a></li>
                            <li class="menu-item-has-children"><a href="#about">من نحن</a></li>
                            <li class="menu-item-has-children"><a href="#services">خدماتنا</a></li>
         
                            <li class="menu-item-has-children"><a href="#contact">تواصل معنا</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->
               
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->
<main id="main" style="    text-align: -webkit-center;     padding: 100px;">

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
                            mail($email,"Dr Khawlan Landing Page",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");



                            echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت");
                        }

                    }

                    ?>

                </h3>
            </header>
        </div>
   
    </section><!-- #contact -->
</main>


  <!-- footer area start -->
        <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="copyright text-center">
                            <h4>جميع الحقوق محفوظة &copy; 2019 <a href="https://advertizer.sa.com/digital/" target="_blank">تصميم وتطوير شركة أدفرتيزر</a> </h4>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area end -->

    </div>
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="js/jquery-plugin-collection.js"></script>

    <!-- Custom script for this template -->
    <script src="js/script.js"></script>
</body>

</html>