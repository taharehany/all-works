<!doctype html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>مكتب المستشار محمد بكر</title>
    <link rel="icon" href="img/favicon.png">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-xl-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"><img src="img/logo.png"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">الرئيسية</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="ndex.html#about">نبذة عنا</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="ndex.html#field">المجالات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="ndex.html#features">ما يميزنا</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="ndex.html#clients">عملائنا</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="ndex.html#contact">تواصل معنا</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
        
    <style>
        .main_menu {
            position: fixed;
            z-index: 9999 !important;
            width: 100%;
            background-color: #fff;
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.05);
            top: 0;
        }
        .copyright_part {
            position: absolute;
            width: 100%;
            bottom: 0;
        }
        main {
            text-align:center;
        }
        h3 {
            line-height: 2!important
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
                                mail($email,"lawyer Mohamed Bakr landing SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت، شكرا لك");
                            }
                        }
                        ?>
                    </h3>
                </header>
            </div>
        </section>
    </main>

    <!-- footer part start-->
    <footer class="copyright_part">
        <div class="container">
            <div class="row align-items-center">
                <p class="footer-text text-center m-0 col-lg-12 col-md-12">
                    جميع الحقوق محفوظة &copy; تم التصميم بواسطة <a href="http://advertizer.com.eg" target="_blank">أدفرتيزر</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- over style CSS -->
    <link rel="stylesheet" href="css/over-style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>