<!DOCTYPE html>
<html lang="ar">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="discrption" content="شركة هندسية تعمل فى مجال هندسة المياه (معالجة المياه ومحطات تحلية المياه ومحطات تنقية مياه الشرب)">
    <meta name="keyword" content="شركات تحلية المياه,
    محطات تحلية مياه منزلية,
    شركات فلاتر مياه,
    محطات تحلية مياه الابار,
    اسعار محطات تنقية المياه,
    محطة تحلية منزلية,
    محطة معالجة مياه الصرف الصحي,
    اسعار محطات تحلية المياه المنزلية,
    محطات تنقية مياه الشرب,
    محطات معالجة المياه,
    محطة تنقية مياه للبيع,
    شركات صيانة فلاتر المياه,
    محطات الصرف الصحي,
    محطات تنقية المياه,
    محطة معالجة الصرف الصحي,
    محطة الصرف الصحي,
    شركات استيراد فلاتر المياة,
    محطات تحلية المياه المنزلية,
    محطات معالجة الصرف الصحي,
    اسعار محطة تحلية مياه الابار,
    شركة فلتر ماء,
    شركات محطات معالجة المياه,
    شركات تركيب فلاتر المياه,
    محطات المعالجة,
    محطة تحلية المياه المنزلية,
    محطة تنقية مياه الشرب,
    محطة معالجة مياه الشرب,
    شركة صيانة فلاتر مياة,
    شركة تركيب فلتر ماء,
    محطات المعالجة الثلاثية,
    تكلفة محطة تنقية مياه الشرب,
    افضل شركة فلاتر مياه,
    فني معالجة مياه,
    محطة تحلية مياه الابار للبيع,
    تنفيذ محطات معالجة الصرف الصحي,
    صيانة محطات الصرف الصحي">
    <meta name=robots content="index, follow">
    <meta name="author" content="esp">
    <!-- For Facebook -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="" />
    <!-- Title -->
    <title>الشركة الهندسية للمشروعات التكميلية</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/fav.webp">
    <link rel="stylesheet" href="over-style.css">
    <!--Responsive css-->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="https://kit.fontawesome.com/d6d117068c.js"></script>
</head>
   <body>
       
       
      <!--Navbar Start-->
      <nav class="navbar navbar-expand-lg navbar-dark">
         <div class="container">
            <a class="navbar-brand logo" href="index.html"><img src="assets/img/logo.png"></a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarCollapse">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a href="index.html" class="nav-link active">الرئيسية</a>
                  </li>
                  <li class="nav-item">
                     <a href="index.html#about" class="nav-link">عن الشركة</a>
                  </li>
                  <li class="nav-item">
                     <a href="index.html#services" class="nav-link">خدماتنا</a>
                  </li>
                   <li class="nav-item">
                     <a href="index.html#sections" class="nav-link">قطاعات الأعمال</a>
                  </li>
                  <li class="nav-item">
                     <a href="index.html#clients" class="nav-link">عملائنا</a>
                  </li>
                  <li class="nav-item">
                     <a href="index.html#contact" class="nav-link">تواصل معنا</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <!--Navbar End-->
        
        <style>
            body {
                text-align:center;
                padding-top:50px;
            }
            main h3 {
                line-height:2;
            }
            nav {
                box-shadow: 0px 0px 18px 1px rgba(0, 0, 0, 0.1);
            }
            .fabon-footer-area {
                position: absolute;
                width: 100%;
                bottom: 0
            }
        </style>
        <!-- /menubar -->
        <main id="main" style="margin-top: 150px;">
            <section id="about">
                <div class="container">
                    <header class="section-header">
                        <h3>
                            <?php
                            $email= "info@espegy.com";

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
                                    mail($email,"ESP landing SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                    echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت، شكرا لك");
                                }
                            }
                            ?>
                        </h3>
                    </header>
                </div>
            </section><!-- #contact -->
        </main>



	   <!-- Footer Area Start -->
      <footer class="fabon-footer-area" dir="rtl">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <p>جميع الحقوق محفوظة &copy; 2019 تم التصميم بواسطة <a href="" target="_blank">أدفرتيزر</a></p>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer Area End -->
       
       
      <!--Jquery js-->
      <script src="assets/js/jquery-3.0.0.min.js"></script>
      <!--Bootstrap js-->
      <script src="assets/js/bootstrap.min.js"></script>
      <!--ScrollIt js-->
      <script src="assets/js/scrollIt.min.js"></script>
      <!--Owl-Carousel js-->
      <script src="assets/js/owl.carousel.min.js"></script>
      <!--Ripples js-->
      <script src="assets/js/jquery.ripples-min.js"></script>
      <!--Barfiller js-->
      <script src="assets/js/jquery.barfiller.js"></script>
      <!--Animatedheadline js-->
      <script src="assets/js/jquery.animatedheadline.min.js"></script>
      <!-- Isotop Js -->
      <script src="assets/js/isotope.pkgd.min.js"></script>
      <script src="assets/js/custom-isotop.js"></script>
      <!--Magnific js-->
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <!--Init js-->
      <script src="assets/js/init.js"></script>
      <script src="assets/js/typed.min.js"></script>
      <!--Main js-->
      <script src="assets/js/main.js"></script>
   </body>
</html>