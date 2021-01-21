@extends('layouts.' . (config('view.theme') ?? 'app') )

@section('title')
Документы, регламентирующие работу ООО&nbsp;«КБ&nbsp;911»
@stop

@section('description',
    'Приказы, положения и политика обработки персональных данных - основные документы, регламентирующие работу ООО&nbsp;«КБ&nbsp;911». '
    . config('custom.main_description')
    )

@section('content')

    <!--documents-->
    <section class="mission_area sec_pad">
        <div class="container">
            <div class="section_title text-center">
                {{--<h6 class="wow fadeInUp">документы</h6>--}}
                <h2 class="wow fadeInUp" data-wow-delay="0.2s">
                    Документы
                </h2>
            </div>
            {{--<div class="row">
                <div class="col-lg-12">
                    <p>
                        Здесь представлены различные документы, которые необходимо представлять в таких случаях. Ну и
                        какой нибудь сопроводительный текст. Здесь представлены различные документы, которые необходимо представлять в таких случаях. Ну и
                        какой нибудь сопроводительный текст. Здесь представлены документы, которые необходимо представлять в таких случаях. Ну и
                        какой нибудь сопроводительный текст. Здесь представлены различные документы, которые необходимо
                        представлять в в таких случаях. Ну и какой нибудь сопроводительный текст. докумененты документы
                    </p>
                </div>
            </div>--}}
        </div>
    {{--</section>
    <!--documents-->


    <!--blog area-->
    <section class="blog_area sec_pad">--}}
        <div class="container">
            <div class="row">
                {{--<div class="col-lg-8 blog_info">--}}
                <div class="col-lg-12 blog_info">
                    <div class="row">

                        @php
                            $dataDocuments = [
                                [
                                    'header' => 'Приказ о внесении в реестр Роскомнадзора',
                                    'resource' => 'Приказ о внесении в реестр Роскомнадзора.pdf',
                                    'image' => 'Приказ о внесении в реестр Роскомнадзора.jpg',
                                    'downloaded_at' => 'Загружено: 25 Октября 2020 г.',
                                ],
                                [
                                    'header' => 'Положение об обработке персональных данных',
                                    'resource' => 'Положение об обработке персональных данных.pdf',
                                    'image' => 'Положение об обработке персональных данных.jpg',
                                    'downloaded_at' => 'Загружено: 25 Октября 2020 г.',
                                ],
                                [
                                    'header' => 'Политика обработки персональных данных',
                                    'resource' => 'Политика обработки персональных данных.pdf',
                                    'image' => 'Политика обработки персональных данных_507x690.jpg',
                                    'downloaded_at' => 'Загружено: 25 Октября 2020 г.',
                                ],
                                // [
                                //     'header' => 'Письмо о внесении в госреестр',
                                //     'resource' => 'письо_фссп_кб911.pdf',
                                //     'image' => 'письо_фссп_кб911.png',
                                //     'downloaded_at' => 'Загружено: 29 Декабря 2020 г.',
                                // ],
                                [
                                    'header' => 'Свидетельство о внесении сведений в госреестр',
                                    'resource' => 'реестр_кб911.pdf',
                                    'image' => 'реестр_кб911.png',
                                    'downloaded_at' => 'Загружено: 29 Декабря 2020 г.',
                                ],
                            ];
                        @endphp

                        @foreach($dataDocuments as $dataDocument)
                            @include('static_pages.parts.document', compact('dataDocument'))
                        @endforeach

                    </div>
                </div>
                {{--<div class="col-lg-4">
                    <div class="blog_sidebar">
                        <div class="sidebar_widget f_latest_widget">
                            <h4 class="f-title">Recent Post</h4>
                            <div class="f_latest_info">
                                <div class="media f_latest_item">
                                    <div class="img_hover">
                                        <i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_post_1.jpg" alt=""/>
                                    </div>

                                    <div class="media-body">
                                        <a href="#">
                                            <h5>
                                                Nunc egestas odio sed lacus aliquet, acula.
                                            </h5>
                                        </a>
                                        <a href="#" class="l_date">12 hours ago</a>
                                    </div>
                                </div>
                                <div class="media f_latest_item">
                                    <div class="img_hover">
                                        <i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_post_2.jpg" alt=""/>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">
                                            <h5>
                                                Nunc egestas odio sed lacus aliquet, acula.
                                            </h5>
                                        </a>
                                        <a href="#" class="l_date">12 hours ago</a>
                                    </div>
                                </div>
                                <div class="media f_latest_item">
                                    <div class="img_hover">
                                        <i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_post_3.jpg" alt=""/>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">
                                            <h5>
                                                Nunc egestas odio sed lacus aliquet, acula.
                                            </h5>
                                        </a>
                                        <a href="#" class="l_date">12 hours ago</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar_widget">
                            <h3 class="f-title">Instagram Gallery</h3>
                            <ul class="list-unstyled recent_post_gallery">
                                <li>
                                    <a href="#">
                                        <i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_recent_post1.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_recent_post2.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_recent_post3.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_recent_post4.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_recent_post5.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_recent_post6.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_recent_post7.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_recent_post8.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_recent_post9.jpg" alt=""/></a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar_widget f_link_widget">
                            <h3 class="f-title">Category</h3>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>About us</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Blog page</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Partners</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Social media</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Site map</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Forum</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Contact</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Privacy</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Policies</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Topics</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Questions</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Help</a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar_widget slider_widget">
                            <h3 class="f-title">Slider</h3>
                            <div class="slider_info">
                                <div class="post_slider">
                                    <img src="assets/img/blog_slider_img.jpg" alt=""/>
                                    <img src="assets/img/blog_slider_img.jpg" alt=""/>
                                    <img src="assets/img/blog_slider_img.jpg" alt=""/>
                                </div>
                                <div class="blog_slider_nav">
                                    <i class="fas fa-chevron-left left"></i>
                                    <i class="fas fa-chevron-right right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar_widget f_link_widget">
                            <h3 class="f-title">Meta</h3>
                            <ul class="list-unstyled meta_tag">
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Logis</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Entries RSS</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Comments RSS</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Wordpress.org</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>
    <!--blog area-->

@endsection
