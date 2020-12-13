<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>N6.45</title>
        <meta name="description" content="">
        <meta name="author" content="TaHa">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/fav.png" type="image/png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/icofonts.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
    <div id="home" class="wrapper">
    <!-- start hero section -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="index.html"><img class="img-responsive" src="img/logo-wh.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="icofont icofont-navigation-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav">
              <a class="nav-item nav-link active" href="index.html">Home<span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="index.html#about">About Us</a>
              <a class="nav-item nav-link" href="index.html#services">Services</a>
              <a class="nav-item nav-link" href="index.html#contact">Contact</a>
            </div>
          </div>
        </div>
    </nav>
    <!-- end hero section -->
        
    <style>
        body {
            text-align: center
        }
        .navbar {
            background-color: #000
        }
        main {
            margin-top: 70px
        }
        main h3 {
            line-height: 1.7;
            max-width: 80%;
            margin: auto
        }
        #footer {
            background-color: #000;
            position: absolute;
            bottom: 0;
            width: 100%
        }
    </style>
        
    <!-- /menubar -->
    <main id="main" style="margin-top: 150px;">
        <section id="about">
            <div class="container">
                <header class="section-header">
                    <h3>
                        <?php
                        $email= "ashraftammam@gmail.com";

                        if (!empty($_POST)){

                            if(empty($_POST['name']) or empty($_POST['tel']) or empty($_POST['email']) or empty($_POST['message'])){
                                echo("You have not filled in all boxes <br>");

                            }
                            $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
                            if(!preg_match($regex, $_POST['email'])){
                                echo("Wrong mail");

                            }
                            else{
                                $message  = "الاسم :\n{$_POST["name"]}\n";
                                $message .= "التليفون :\n{$_POST["tel"]}\n";
                                $message .= "البريد الإلكتروني :\n{$_POST["email"]}\n";
                                $message .= "الرسالة :\n{$_POST["message"]}\n";
                                $message .= "أي بي :\n{$_SERVER['REMOTE_ADDR']}\n";
                                $message = stripslashes($message);
                                $message = wordwrap($message, 70);
                                mail($email,"N6.45 Landing Page SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                echo("Your message has been received and will be contacted as soon as possible.");
                            }
                        }
                        ?>
                    </h3>
                </header>
            </div>
        </section><!-- #contact -->
    </main>

    <!-- Footer Start -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="footer-copyright text-center">
                        <p>  Designed By <a href="http://advertizer.com.eg/" target="_blank">Advertizer</a> <i class="icofont icofont-ui-love"></i> All Rights Reseved &copy; 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
        
    </div>
    <!-- scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
        
    </body>
</html>