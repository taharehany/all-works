<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wahion Yoha</title>
    <meta name="description" content="">
    <meta name="author" content="TaHa">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="https://kit.fontawesome.com/d6d117068c.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg header" id="myHeader">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="img/new-logo-small-white.png" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#about">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#courses">courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#services">services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#offers">offers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#clients">clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#contact">contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- header -->

    <style>
        footer.bottom {
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
    <!-- /menubar -->
    <main id="main" style="margin-top: 150px; text-align: center;">
        <section id="about">
            <div class="container">
                <header class="section-header">
                    <h3>
                        <?php
                            $email= "info@quranteacheracademy.com";

                            if (!empty($_POST)){

                                if(empty($_POST['name']) or empty($_POST['tel']) or empty($_POST['email']) or  empty($_POST['message'])){
                                    echo("You have not filled in all the fields <br>");

                                }
                                $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
                                if(!preg_match($regex, $_POST['email'])){
                                    echo("Wrong mail");

                                }
                                else{
                                    $message  = "الاسم :\n{$_POST["name"]}\n";
                                    $message .= "التليفون :\n{$_POST["tel"]}\n";
                                    $message .= "الرسالة :\n{$_POST["message"]}\n";
                                    $message .= "أي بي :\n{$_SERVER['REMOTE_ADDR']}\n";
                                    $message = stripslashes($message);
                                    $message = wordwrap($message, 70);
                                    mail($email,"Quran Teacher Academy (en-landing-ae)",$message,"From: {$_POST["name"]} <{$_POST["tel"]}>");

                                    echo("Your message has been received and we will contact you shortly, thank you");
                                }
                            }
                            ?>
                    </h3>
                </header>
            </div>
        </section><!-- #contact -->
    </main>

    <!-- footer -->
    <footer class="bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright">
                        <p>All rights reserved © <span>2020</span><br /> design and development by <a href="http://advertizeragency.com/" target="_blank" class="transition">Advertizer</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->

    <!-- scripts -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>