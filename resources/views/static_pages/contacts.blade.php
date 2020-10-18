@extends('layouts.' . (config('view.theme') ?? 'app') )

@section('title', __('Contacts'))

@section('description', config('custom.main_description'))

@section('content')

    <!--work_area-->
    <section class="work_area sec_pad bg_color">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="about_content pl-0 wow fadeInLeft">
                        <h6>Есть вопросы?</h6>
                        <h2>Свяжитесь с нами любым удобным для Вас способом</h2>
                        <p>
                            Aliquam vehicula mollis urna vel dignissim. Integer tincidunt
                            viverra est, non congue lorem tempor ac. Phasellus pulvinar
                            iaculis nunc at placerat. Sed porta sollicitudin eros, vel
                            sagittis turpis consequat nec. Donec ac viverra ligula, in
                            scelerisque leo.
                        </p>
                        <p>
                            Proin massa quam, ornare in porta quis, sagittis vitae lectus.
                            Maecenas dictum, augue vel dictum tempus, sapien metus
                            pulvinar sapien, placerat pulvinar lectus risus eu erat.
                        </p>
                        <a href="#" class="theme_btn">View More</a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <img class="img-fluid" src="{{ asset('citrix/assets/img/636x549.jpg') }}" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!--work_area-->

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

    <section class="map_area">
        <div id="mapBox2"
             class="mapBox1"
             data-marker="citrix/assets/img/location.png"
             data-lat="55.751999"
             data-lon="37.617734"
             data-zoom="14"
             data-info="Верхняя Красносельская, владение 16, строение 2, этаж 1"
             datad-mlat="55.751999"
             data-mlon="37.617734">
        </div>
    </section>
@endsection
