@extends('layouts.' . (config('view.theme') ?? 'app') )

@section('title', __('Home'))

@section('description', config('custom.main_description'))

@section('content')

    <!--work_area-->
    <section class="work_area sec_pad bg_color">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="about_content pl-0 wow fadeInLeft">
                        <h6>Добро пожаловать!</h6>
                        <h2>Добро пожаловать на сайт агенства КБ911</h2>
                        <p>
                            ООО «КБ911» независимое коллекторское агентство, работающее с дебиторской задолженностью
                            граждан и организаций с 2011 года.
                        </p>
                        <p>
                            Наших сотрудников отличают профессионализм и индивидуальный подход к каждому должнику. Мы
                            стараемся учитывать все обстоятельства дела, «достучаться» до самого отпетого неплательщика.
                            Неординарный подход к решению проблемы, позволяющий учитывать множество важных для
                            разрешения конфликта экономических, социальных и психологических аспектов, отличает нас от
                            большинства юридических агентств, занимающихся долгами.
                        </p>
                        <p>
                            ООО «КБ911» независимое коллекторское агентство, работающее с дебиторской задолженностью
                            граждан и организаций с 2011 года.
                        </p>
                        {{--<a href="#" class="theme_btn">View More</a>--}}
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <img class="img-fluid" src="{{ asset('citrix/assets/img/636x549.jpg') }}" alt=""/>
               </div>
            </div>
        </div>
    </section>
    <!--work_area-->

    <!--mission_area-->
    <section class="mission_area sec_pad">
        <div class="container">
            <div class="section_title text-center">
                <h6 class="wow fadeInUp">наша миссия</h6>
                <h2 class="wow fadeInUp" data-wow-delay="0.2s">
                    Наша миссия и стратегия
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-6 mission_content">
                    <p>
                        Компания КБ911 активно развивает онлайн-методы взаимодействия с заемщиками, ее деятельность
                        направлена на досудебное урегулирование проблемной задолженности, что выгодно обеим сторонам.
                        Организация зарегистрирована в Москве, ее гражданская ответственность застрахована в АО
                        «АльфаСтрахование».
                    </p>
                    <p>
                        Клиентам также гарантируется помощь специалистов компании в разработке более подходящих для них
                        графиков платежей.
                    </p>
                </div>
                <div class="col-lg-6 mission_content">
                    <p>
                        На сайте планируется раздел «Погашение долга», где будут излагаться правовые основы
                        взаимоотношений
                        коллекторов и заемщиков, даватся советы по погашению долга, приводиться реквизиты для совершения
                        платежей.
                    </p>
                    <p>
                        Однако «Личного кабинета» для клиента здесь пока не будет — отсутствует возможность совершать
                        платежи онлайн и следить «вживую» за состоянием долга, скидки также не предусмотрены.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--mission_area-->

    <!--work_area2-->
    <section class="work_area sec_pad bg_color">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6 wow fadeInLeft">
                    <img class="img-fluid" src="{{ asset('citrix/assets/img/about/pexels-rachel-claire-1280x880.jpg') }}"
                         alt=""/>
                </div>
                <div class="col-lg-6">
                    <div class="about_content pl-0 wow fadeInRight">
                        <h6>О компании</h6>
                        <h2>О компании КБ911</h2>
                        <p>
                            Мы — динамично развивающаяся компания, обладающая обширными интеллектуальными и
                            материальными ресурсами. Применяя новейшие информационные и правовые технологии, мы
                            рассчитываем прочно занять лидирующее положение на рынке долгов Республики Хакасия.
                        </p>
                        <a href="/about" class="theme_btn">подробнее о компании</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--work_area2-->

    <!-- skill area -->
    {{--<section class="skill_area bg_color sec_pad">
        <div class="container">
            <div class="section_title text-center">
                <h6>достижения</h6>
                <h2>Наши достижения</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="skill_item">
                        <div class="count_main">
                            <div class="circle1">
                                <div class="counter_content">
                                    <span class="counter">75</span>%
                                </div>
                            </div>
                        </div>
                        <h6>Взыскано</h6>
                        <p>
                            только в 2020 году взыскано долгов на сумму более 40 000 000 тугриков.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="skill_item">
                        <div class="count_main">
                            <div class="circle2">
                                <div class="counter_content">
                                    <span class="counter">50</span>%
                                </div>
                            </div>
                        </div>
                        <h6>Magento</h6>
                        <p>
                            Ut iaculis lectus urna, sit amet porttitor erat auctor at.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="skill_item">
                        <div class="count_main">
                            <div class="circle3">
                                <div class="counter_content">
                                    <span class="counter">62</span>%
                                </div>
                            </div>
                        </div>
                        <h6>Budypress</h6>
                        <p>
                            Ut iaculis lectus urna, sit amet porttitor erat auctor at.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="skill_item">
                        <div class="count_main">
                            <div class="circle4">
                                <div class="counter_content">
                                    <span class="counter">92</span>%
                                </div>
                            </div>
                        </div>
                        <h6>bbpress</h6>
                        <p>
                            Ut iaculis lectus urna, sit amet porttitor erat auctor at.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- skill area -->

@endsection
