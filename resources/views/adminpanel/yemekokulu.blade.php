<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jardín De Ensueño</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/loder.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/loder.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header" style="background: #0C1021">
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="/"><img src="assets/img/logo/logoo.png" alt="" width="240"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-8">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation" style="background: transparent">

                                        <li class="add-list" style="top: 20px;"><a href="/">Anasayfa</a></li>
                                        <li class="add-list"style="top: 20px;"><a href="/">Yemek Okulu</a></li>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 50px;top: 20px;">
                                                Tarifler
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ URL::to('/tarif/yemek') }}">Yemek Tarifleri</a>
                                                <a class="dropdown-item" href="{{ URL::to('/tarif/hamurisi') }}">Hamur İşi Tarifleri</a>
                                                <a class="dropdown-item" href="{{ URL::to('/tarif/meze') }}">Meze Tarifleri</a>
                                                <a class="dropdown-item" href="{{ URL::to('/tarif/aperatif') }}">Aperatif Tarifler</a>
                                                <a class="dropdown-item" href="{{ URL::to('/tarif/tatli') }}">Tatlı Tarifleri</a>
                                                <a class="dropdown-item" href="{{ URL::to('/tarif/icecek') }}">İçecek Tarifleri</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="/tarif">Papüler Tarifler</a>
                                            </div>

                                            <li class="add-list"style="top: 20px;"><a href="/login" ><i class="ti-plus" ></i> Tarif Ekle</a></li>
                                            <li class="/login"><a href="/login">
                                                    <i class="/login"></i> Giriş Yap</a> </li>
                                            <li class="/login"><a href="/register">
                                                    <i class="/login"></i> Üye Ol</a>
                                            </li>
                                        </div>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header End -->
</header>
<main>
    <!-- peoples-visit Start -->
    <div class="peoples-visit dining-padding-top">
        <!-- Single Left img -->
        <div class="single-visit left-img">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-8">
                        <div class="visit-caption">
                            <span>Jardín De Ensueño</span>
                            <h3>Hayalinizde ki yemekleri yapabilmeniz için burdayız.</h3>
                            <!--Single Visit categories -->
                            <div class="visit-categories mb-40">
                                <div class="visit-location">
                                    <span class="flaticon-home"></span>
                                </div>
                                <div class="visit-cap">
                                    <h4></h4>
                                    <p>Bizim mutfağın bereketi ve neşesi sürekli araştırıp, öğrenmekten ve bunları paylaşmaktan geliyor.
                                        Her hafta yayınlanacak yeni içeriklerimizi takip ederek siz de mutfağa dair çok şey öğrenebilir,
                                        memleket değerlerini korumak için çalışan ailemizin bir parçası olabilirsiniz.
                                    </p>
                                </div>
                            </div>
                            <!--Single Visit categories -->
                            <div class="visit-categories">
                                <div class="visit-location">
                                    <span class="flaticon-work"></span>
                                </div>
                                <div class="visit-cap">
                                    <h4></h4>
                                    <p>Siz de Jardín De Ensueño Yemek Okulu kanalımıza abone olup hayallerinizi,
                                        görmek istediklerinizi yorumlara yazarak, bizimle paylaşabilirsiniz.
                                    </p>
                                    <p>Youtube kanalımız çok yakında sizlerle..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <!-- Footer Start-->
    <div class="footer-area">
        <div class="container">
            <div class="footer-top footer-padding">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="/"><img src="assets/img/logo/loder.png" alt="" width="175" ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <ul>
                                    <h4>Müsteri Hizmetleri</h4>
                                    <h4>Telefon: +90(216)5334353</h4>
                                    <h4>E-posta: hayalbahcesi@je.com</h4>


                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <li><a href="#">Hakkında</a></li>
                                <br>
                                <li><a href="#">Gizlilik ve Güvenlik</a></li>
                                <br>
                                <li><a href="#">Kurumsal Satış</a></li>
                                <br>
                                <li><a href="#">Ekip</a></li>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Uygulamalar</h4>
                                <ul>
                                    <li class="app-log"><a href="#"><img src="assets/img/gallery/app-logo.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/gallery/app-logo2.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-9 col-lg-8">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Jardín De Ensueño &copy;<script>document.write(new Date().getFullYear());</script> Tüm Hakları Gizlidir <i class="fa fa-heart" aria-hidden="true"></i>  <a href="/" target="_blank">Jardín De Ensueño</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <!-- Footer Social -->
                        <div class="footer-social f-right">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->

</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>


<!-- JS here -->
<!-- All JS Custom Plugins Link Here here -->
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>
</html>

