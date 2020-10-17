<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jardín De Ensueño</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/logo/loder.png')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{asset('assets/img/logo/loder.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header">
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="/"><img src="{{asset('assets/img/logo/logoo.png')}}" alt="" width="240"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-8">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation" style="background: transparent">

                                        <li class="add-list" style="top: 20px;"><a href="/">Anasayfa</a></li>
                                        <li class="add-list"style="top: 20px;"><a href="/yemekokulu">Yemek Okulu</a></li>
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

    <!-- Hero Area Start-->
    <div class="slider-area hero-overly">
        <div class="single-slider hero-overly  slider-height d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9">
                        <!-- Hero Caption -->
                        <div class="hero__caption">
                            <span>Tariflerimizi keşfetmeye ne dersiniz ?</span>
                            <h1></h1>
                        </div>
                        <!--Hero form -->
                        <form action="#" class="search-box">
                            <div class="input-form">
                                <input type="text" placeholder="Nasıl Yardımcı Olabiliriz?">
                            </div>
                            <div class="select-form">
                                <div class="select-itms">
                                    <select name="select" id="select1">
                                        <option value="">Tüm Kategoriler</option>
                                        <option value="">Tatlı Tarifleri</option>
                                        <option value="">Yemek Tarifleri</option>
                                        <option value="">Başlangıç Tarifleri</option>
                                        <option value="">İçecek Tarifleri</option>
                                    </select>
                                </div>
                            </div>
                            <div class="search-form">
                                <a href="/tarif">Ara</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--Hero Area End-->
    <!-- Popular Locations Start -->
    <div class="popular-location section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>En Çok Tercih Edilen</span>
                        <h2>Son Yüklenilen Tarifler</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($yemekTarifleri->slice(0,6) as $yemek)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-location mb-30">
                        <div class="location-img">
                            <img src="{{asset('/uploads/products/').'/'.$yemek->photo}}" alt="">
                        </div>
                        <div class="location-details">
                            <p>{{$yemek->tarifadi}}</p>
                            <a href="/tarif-detay/{{$yemek->id}}" class="location-btn"> Tarifi İncele </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- More Btn -->
            <div class="row justify-content-center">
                <div class="room-btn pt-20">
                    <a href="/tarif" class="btn view-btn1">Daha Fazlası</a>
                </div>
            </div>
        </div>

        <!-- Popular Locations End -->
        <!-- Services Area Start -->
        <div class="services-area pt-150 pb-150 section-bg" data-background="{{asset('assets/img/gallery/s33.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 text-center mb-80">
                            <span>Jardín De Ensueño</span>
                            <h2>Ailesine Katılmak İster misiniz?</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services text-center mb-50">
                            <div class="services-icon">
                                <span class="flaticon-list"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">1. Üye olun.</a></h5>
                                <p></p>
                            </div>
                            <!-- Shpape -->
                            <img class="shape1 d-none d-lg-block" src="{{asset('assets/img/icon/serices1.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services text-center mb-50">
                            <div class="services-icon">
                                <span class="flaticon-problem"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">2. Farklı tariflerinizi bizimle paylaşın.</a></h5>
                                <p></p>
                            </div>
                            <img class="shape2 d-none d-lg-block" src="{{asset('assets/img/icon/serices2.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services text-center mb-50">
                            <div class="services-icon">
                                <span class="flaticon-respect"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">3. Kendi ekibinizi genişletin.</a></h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area End -->
        <!-- Categories Area Start -->
        <div class="categories-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>Jardín De Ensueño</span>
                            <h2>Size Sunduğumuz Hizmetlerimiz</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-food"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="/register">Üye Ol</a></h5>
                                <p>Üye olarak kendi tariflerinizi yayınlaya bilirsiniz.</p>
                                <a href="/register">Yukarı kaydır</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-respect"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="/yakinda">Satış Yap</a></h5>
                                <p>Kendi tariflerinizle yaptığınız yemekleri bulunduğunuz şehirde satışa sunabilirsiniz.</p>
                                <a href="">Yukarı kaydır</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-home"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="/yakinda">Eğitim Al</a></h5>
                                <p>Temel aşçılık eğitimi alarak sertifika sahibi olabilirsiniz.</p>
                                <a href="catagori.html">Yukarı kaydır</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-list"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="/yakinda">Yardım Et</a></h5>
                                <p>Yemek yapmaya meraklı miniklere yardım da bulunabilirsiniz.</p>
                                <a href="catagori.html">Yukarı kaydır</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Categories Area End -->
        <!-- peoples-visit Start -->
        <div class="peoples-visit dining-padding-top">
            <!-- Single Left img -->
            <div class="single-visit left-img">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-8">
                            <div class="visit-caption">
                                <span>Jardín De Ensueño</span>
                                <h3>Hayalinizde ki yemekleri hazırlamak için burdayız.</h3>
                                <!--Single Visit categories -->
                                <div class="visit-categories mb-40">
                                    <div class="visit-location">
                                        <span class="flaticon-travel"></span>
                                    </div>
                                    <div class="visit-cap">
                                        <h4>Adresimiz</h4>
                                        <p>Göksu, Küçüksu Cd. No:8, 34820 Beykoz/İstanbul
                                        </p>
                                    </div>
                                </div>
                                <!--Single Visit categories -->
                                <div class="visit-categories">
                                    <div class="visit-location">
                                        <span class="flaticon-work"></span>
                                    </div>
                                    <div class="visit-cap">
                                        <h4>Bize Ulaşın</h4>
                                        <p>Telefon: +90(216)5334353 <br>
                                            E-posta: hayalbahcesi@jde.com

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- peoples-visit End -->
        <!-- Testimonial Start -->
        <div class="testimonial-area testimonial-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>Jardín De Ensueño</span>
                            <h2>Biz Kimiz ?</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-11 col-md-11">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <p>Yemek yapmaya meraklı ve bu merakı aşçılık eğitimi ile birleştiren bir aşçının insanlara destek ve fikir vermek amacı ile oluşturulmuş bir web arayüz.</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center mb-30">
                                        <div class="founder-img">
                                            <img src="{{asset('assets/img/testmonial/22.jpg')}}" alt="" width="80" >
                                        </div>
                                        <div class="founder-text">
                                            <span>İrem YAŞA</span>
                                            <p>AŞÇI</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <!-- Subscribe Area Start -->
        <div class="subscribe-area section-bg pt-150 pb-150" data-background="{{asset('assets/img/gallery/33.jpg')}}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 text-center mb-40">
                            <span>Jardín De Ensueño</span>
                            <h2>E-Bültenimize Üye Ol </h2>
                        </div>
                        <!--Hero form -->
                        <form action="#" class="search-box">
                            <div class="input-form">
                                <input type="text" placeholder="E-posta adresiniz">
                            </div>
                            <div class="search-form">
                                <a href="#">Gönder</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe Area End -->
        <!-- Blog Ara Start -->
        <div class="home-blog-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span>Jardín De Ensueño</span>
                            <h2>Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{asset('assets/img/gallery/s10.jpg')}}" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Fotoğrafçılık</span>
                                <h3><a href="blog.html">Yemeği sergilemenin
                                        en doğru yolu taze ve albenili görüntülerdir.</a></h3>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{asset('assets/img/gallery/s11.jpg')}}" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Sunum</span>
                                <h3><a href="blog.html">Yemeğin lezzetten önce
                                        görüntüsü cezbetmelidir.
                                    </a></h3>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{asset('assets/img/gallery/s14.jpg')}}" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Süsleme Sanatı</span>
                                <h3><a href="">Sadece lezzetli yemekler hazırlamakla kalmayıp,
                                        aynı zamanda onları dekore etmek önemlidir.
                                    </a></h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Blog Ara End -->
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
                                    <a href="/"><img src="{{asset('assets/img/logo/loder.png')}}" alt="" width="175" ></a>
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
                                    <li class="app-log"><a href="#"><img src="{{asset('assets/img/gallery/app-logo.png')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('assets/img/gallery/app-logo2.png')}}" alt=""></a></li>
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
<script src="{{asset('./assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('./assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('./assets/js/popper.min.js')}}"></script>
<script src="{{asset('./assets/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('./assets/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('./assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('./assets/js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('./assets/js/wow.min.js')}}"></script>
<script src="{{asset('./assets/js/animated.headline.js')}}"></script>
<script src="{{asset('./assets/js/jquery.magnific-popup.js')}}"></script>

<!-- Nice-select, sticky -->
<script src="{{asset('./assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('./assets/js/jquery.sticky.js')}}"></script>

<!-- contact js -->
<script src="{{asset('./assets/js/contact.js')}}"></script>
<script src="{{asset('./assets/js/jquery.form.js')}}"></script>
<script src="{{asset('./assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('./assets/js/mail-script.js')}}"></script>
<script src="{{asset('./assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{asset('./assets/js/plugins.js')}}"></script>
<script src="{{asset('./assets/js/main.js')}}"></script>

</body>
</html>
