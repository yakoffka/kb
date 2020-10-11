<!DOCTYPE html>{{-- оригинал: http://csvisual.com/citrix-new/citrix/ --}}{{-- https://bootstraptema.ru/stuff/templates_bootstrap/blog/citrix/5-1-0-4022--}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="shortcut icon" href="citrix/assets/img/favicon2.png"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="citrix/assets/vendors/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="citrix/assets/vendors/fontawesome/css/all.min.css"/>
    <link rel="stylesheet" href="citrix/assets/vendors/slick/slick.css"/>
    <link rel="stylesheet" href="citrix/assets/vendors/slick/slick-theme.css"/>
    <link rel="stylesheet" href="citrix/assets/vendors/magnify-popup/magnific-popup.css"/>
    <link rel="stylesheet" href="citrix/assets/vendors/circle-progressbar/circularprogress.css"/>
    <link rel="stylesheet" href="citrix/assets/css/style.css"/>
    <link rel="stylesheet" href="citrix/assets/css/responsive.css"/>

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
</head>

<body>
<div class="body_wrapper">
    {{--<div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <img src="citrix/assets/img/loader.gif" alt="" />
        </div>
    </div>--}}
    <header>
        <div class="header_top">
            <!--<div class="container">
              <div class="row">
                <div class="col-md-7 col-sm-5">
                  <div class="header_social_icon">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-behance"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                    <a href="#"><i class="fab fa-tumblr"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                  </div>
                </div>
                <div class="col-md-5 col-sm-7 text-right">
                  <p>Customer Service Hours: <span>8:00 am - 8:30 pm</span></p>
                </div>
              </div>
            </div>-->
        </div>

        <nav class="navbar navbar-expand-lg" id="header">
            <div class="container">
                <div style="transform: translate(0px, -20px) scale(0.2); width: 1px; height: 1px;">
                    @include('partials.logo', ['color1' => '8781bd', 'color2' => 'ffffff'])
                </div>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="menu_toggle"> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto menu">
                        {{--<li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                Home
                            </a>
                            <i class="fas fa-angle-down mobile_dropdown_icon"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link">Home One</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-2.html" class="nav-link">Home Two</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-3.html" class="nav-link">Home Three</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-4.html" class="nav-link">Home Four</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-5.html" class="nav-link">Home Five</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="service.html">Services</a>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                Portfolio
                            </a>
                            <i class="fas fa-angle-down mobile_dropdown_icon"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="portfolio.html" class="nav-link">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a href="portfolio-details.html" class="nav-link">Portfolio Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                Blog
                            </a>
                            <i class="fas fa-angle-down mobile_dropdown_icon"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="blog.html" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-details.html" class="nav-link">Blog Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>--}}
                        @include('menus.main')
                    </ul>

                    {{--<ul class="list-unstyled navbar-nav navright">
                        <li>
                            <a href="#" class="search"><i class="fas fa-search"></i></a>
                        </li>
                    </ul>--}}
                </div>
            </div>
        </nav>
    </header>
    <!--breadcrumb_area-->
    <section class="breadcrumb_area parallax_effect" data-background="img/bg.jpg" style="margin-top: 0px;
          background: url('/citrix/assets/img/1920x925.jpg') no-repeat center bottom / cover;
    ">
        <div class="overlay_bg"></div>
        <div class="container">
            <div class="bread_content">
                <br>
                <br>
                <br>
                <h2>@yield('title')</h2>
                <br>
            </div>
        </div>
    </section>
    <!--breadcrumb_area-->



    @yield('content')



    <!--contact_area-->
    <section class="contact_area sec_pad">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-6">
                    <div class="contact_info_right">
                        <h2>{{ __('Contact Details') }}</h2>
                        <div class="media c_info_item">
                            <div class="icon"><i class="fas fa-home"></i></div>
                            <div class="media-body">
                                <h5>Наш адрес</h5>
                                <p>
                                    107140, г. Москва, улица Верхняя Красносельская, владение 16, строение 2, этаж 1
                                </p>
                            </div>
                        </div>
                        <div class="media c_info_item">
                            <div class="icon"><i class="fas fa-phone"></i></div>
                            <div class="media-body">
                                <h5>Телефоны</h5>
                                <p>
                                    <span>
                                        Офис:
                                        <a href="tel:01253478">+7 800 945 202 123</a>
                                    </span>
                                    <span>
                                        Мобильный:
                                        <a href="tel:01253478">+7 800 945 202 123</a>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="media c_info_item">
                            <div class="icon"><i class="fas fa-envelope"></i></div>
                            <div class="media-body">
                                <h5>Email адрес</h5>
                                <p>
                                    <a href="mailto:email@kb911.su">email@kb911.su</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact_inner">
                        <h2>Отправить сообщение</h2>
                        <form action="contact_process.php" method="post" id="contactForm" novalidate="novalidate"
                              class="row contact_form">
                            <div class="col-lg-12 form-group">
                                <input class="form-control" type="text" id="name" name="name"
                                       placeholder="Иванов Василий"/>
                            </div>
                            <div class="col-lg-12 form-group">
                                <input class="form-control" type="email" id="email" name="email" placeholder="Email"/>
                            </div>
                            <div class="col-lg-12 form-group">
                                <input class="form-control" type="text" id="subject" name="subject" placeholder="Тема"/>
                            </div>
                            <div class="col-lg-12 form-group">
                                <textarea class="form-control" name="message" id="message" cols="30" rows="10"
                                          placeholder="Сообщение"></textarea>
                            </div>
                            <div class="col-lg-12 text-right form-group">
                                <button type="submit" class="theme_btn">
                                    Отправить сообщение
                                </button>
                            </div>
                        </form>
                        <div id="success">Your message succesfully sent!</div>
                        <div id="error">
                            Opps! There is something wrong. Please try again
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact_area-->
{{--<section class="map_area">
    --}}{{--<div id="mapBox2" class="mapBox1" data-marker="citrix/assets/img/location.png" data-lat="40.701083"
         data-lon="-74.1522848" data-zoom="12" data-info="54B, Tailstoi Town 5238 La city, IA 522364"
         data-mlat="40.701083" data-mlon="-74.1522848"></div>--}}{{--
    <div id="mapBox2" class="mapBox1" data-marker="citrix/assets/img/location.png" data-lat="55.751999"
         data-lon="37.617734" data-zoom="14" data-info="Верхняя Красносельская, владение 16, строение 2, этаж 1"
         data-mlat="55.751999" data-mlon="37.617734"></div>
</section>--}}
<!--theme_promo_area-->
    <section class="theme_promo_area">
        <div class="container">
            <h3>Результат нашей работы — не решение суда с исполнительным листом, а реально возвращенные клиенту денежные средства.</h3>
            <a href="#" class="theme_w_btn border_btn">узнать больше</a>
        </div>
    </section>
    <!--theme_promo_area-->
    <!--footer_area-->
    <footer class="footer_area">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="f_widget f_latest_widget">
                            <h3 class="f-title">Последние новости</h3>
                            <div class="f_latest_info">
                                <div class="media f_latest_item">
                                    <div class="img_hover">
                                        <i class="fas fa-plus"></i>
                                        <img src="http://lorempixel.com/70/70/business">
                                    </div>
                                    <div class="media-body">
                                        <a href="#">
                                            <h5>Закон о коллекторах должен быть един</h5>
                                        </a>
                                        <a href="#" class="l_date">5 часов назад</a>
                                    </div>
                                </div>
                                <div class="media f_latest_item">
                                    <div class="img_hover">
                                        <i class="fas fa-plus"></i>
                                        <img src="http://lorempixel.com/70/70/">
                                    </div>
                                    <div class="media-body">
                                        <a href="#">
                                            <h5>Нужно очистить рынок от «серых»</h5>
                                        </a>
                                        <a href="#" class="l_date">12 часов назад</a>
                                    </div>
                                </div>
                                {{--<div class="media f_latest_item">
                                    <div class="img_hover">
                                        <i class="fas fa-plus"></i>
                                        <img src="http://lorempixel.com/70/70/">
                                    </div>
                                    <div class="media-body">
                                        <a href="#">
                                            <h5>Спасите от «спасителей»: как должники </h5>
                                        </a>
                                        <a href="#" class="l_date">2 дня назад</a>
                                    </div>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="f_widget f_link_widget">
                            <h3 class="f-title">Полезные ссылки</h3>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>About us</a>
                                </li>
                                <li>
                                    <a href="#"
                                    ><i class="fas fa-angle-right"></i>Blog page</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                    ><i class="fas fa-angle-right"></i>Partners</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                    ><i class="fas fa-angle-right"></i>Social media</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                    ><i class="fas fa-angle-right"></i>Services</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                    ><i class="fas fa-angle-right"></i>Forum</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                    ><i class="fas fa-angle-right"></i>Contact</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="f_widget f_recnt_widget">
                            <h3 class="f-title">Галерея</h3>
                            <ul class="list-unstyled recent_post_gallery">
                                <li>
                                    <a href="#">
                                        <i class="fas fa-plus"></i>
                                        <img src="http://lorempixel.com/86/86/sports">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-plus"></i>
                                        <img src="http://lorempixel.com/86/86/technics">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-plus"></i>
                                        <img src="http://lorempixel.com/86/86/people">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-plus"></i>
                                        <img src="http://lorempixel.com/86/86/nature">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-plus"></i>
                                        <img src="http://lorempixel.com/86/86/city">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-plus"></i>
                                        <img src="http://lorempixel.com/86/86">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="f_widget f_tag_widget">
                            <h3 class="f-title">Популярные теги</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">creative</a></li>
                                <li><a href="#">multi-purpose</a></li>
                                <li><a href="#">clear</a></li>
                                <li><a href="#">wordpress</a></li>
                                <li><a href="#">flat</a></li>
                                <li><a href="#">magento</a></li>
                                <li><a href="#">blog</a></li>
                                <li><a href="#">retina</a></li>
                                <li><a href="#">wocomerce</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <p>
                            Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            <a href="https://0b1101.site"> YoStudio</a>. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <ul class="f_menu list-unstyled">
                            {{--<li><a href="#">Home</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Pages</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Works</a></li>
                            <li><a href="#">Contact</a></li>--}}
                            @include('menus.main')
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer_area-->
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="citrix/assets/js/jquery-3.4.1.min.js"></script>
<script src="citrix/assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="citrix/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="citrix/assets/vendors/slick/slick.min.js"></script>
<script src="citrix/assets/js/parallaxie.js"></script>
<script src="citrix/assets/vendors/circle-progressbar/jquery.waypoints.min.js"></script>
<script src="citrix/assets/vendors/circle-progressbar/jquery.counterup.min.js"></script>
<script src="citrix/assets/vendors/circle-progressbar/circle-progress.js"></script>
<script src="citrix/assets/vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
<script src="citrix/assets/js/gmaps.min.js"></script>
<script src="citrix/assets/js/map-active.js"></script>
<!-- contact js -->
<script src="citrix/assets/js/jquery.form.js"></script>
<script src="citrix/assets/js/jquery.validate.min.js"></script>
<script src="citrix/assets/js/contact.js"></script>
<script src="citrix/assets/vendors/wow/wow.min.js"></script>
<script src="citrix/assets/js/main.js"></script>
</body>

</html>
