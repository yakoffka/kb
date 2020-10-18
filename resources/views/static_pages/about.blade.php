@extends('layouts.' . (config('view.theme') ?? 'app') )

@section('title', __('About'))

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
                            Мы — динамично развивающаяся компания, обладающая обширными интеллектуальными и
                            материальными ресурсами. Применяя новейшие информационные и правовые технологии, мы
                            рассчитываем прочно занять лидирующее положение на рынке долгов Республики Хакасия.
                        </p>
                        <p>
                            ООО «КБ911» независимое коллекторское агентство, работающее с дебиторской задолженностью
                            граждан и организаций с 2011 года. ООО «КБ911» независимое коллекторское агентство,
                            работающее с дебиторской задолженностью.
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
                    <img class="img-fluid" src="{{ asset('citrix/assets/img/about/pexels-rachel-claire-4998023.jpg') }}"
                         alt=""/>
                </div>
            </div>
        </div>
    </section>
    <!--work_area-->

    <!--theme_promo_area2-->
    <section class="theme_promo_area">
        <div class="container">
            <h3>Мы осуществляем взыскание с соблюдением требований российского законодательства.</h3>
        </div>
    </section>
    <!--theme_promo_area2-->


    <!-- Process area -->
    <section class="process_area sec_pad bg_color">
        <div class="container">
            <div class="section_title text-center">
                <h2>Принципы нашей работы:</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="process_inner">
                        <div class="precess_item media">
                            <div class="icon">01</div>
                            <div class="media-body">
                                <a href="#">
                                    <h6>Нацеленность на конечный результат</h6>
                                </a>
                                <p>
                                    Результат нашей работы — не решение суда с исполнительным листом, а реально
                                    возвращенные клиенту денежные средства.
                                </p>
                            </div>
                        </div>
                        <div class="precess_item media">
                            <div class="icon">02</div>
                            <div class="media-body">
                                <a href="#">
                                    <h6>Соблюдение закона</h6>
                                </a>
                                <p>
                                    Осуществление деятельности в строгом соответствии с законодательством РФ.
                                </p>
                            </div>
                        </div>
                        <div class="precess_item media">
                            <div class="icon">03</div>
                            <div class="media-body">
                                <a href="#">
                                    <h6>Профессионализм сотрудников</h6>
                                </a>
                                <p>
                                    Взыскание задолженности в кратчайшие сроки и с минимальными затратами для клиента.
                                    Гарантия конфиденциальности сотрудничества.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="process_img"
                         style="background: url({{ asset('citrix/assets/img/about/process.jpg') }}) no-repeat center center / contain;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Process area -->

@endsection
