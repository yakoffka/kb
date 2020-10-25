@extends('layouts.' . (config('view.theme') ?? 'app') )

@section('title', __('Services'))

@section('description', config('custom.main_description'))

@section('content')

    <!--work_area finance-->
    <section class="work_area sec_pad1 bg_color">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-12">
                    <h6>Финансовый сектор</h6>
                    <h2>Услуги в сфере финансового сектора</h2>
                </div>
            </div>
            <div class="about_content pl-0 wow fadeInRight">
                <p>
                    Наше бюро оказывает квалифицированную помощь по взысканию задолженности с физических и
                    юридических лиц. Работа по взысканию выполняется с соблюдением индивидуальных требований
                    заказчика. Предоставляем полную отчетность о ходе взыскания по стандартам заказчика.
                    Проводим взыскание на всех стадиях - досудебной, судебной и на стадии исполнительного
                    производства.
                </p>
            </div>

            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6 wow fadeInLeft">
                    <img class="img-fluid" src="{{ asset('citrix/assets/img/services/services1_1280×853.jpg') }}"
                         alt=""/>
                </div>
                <div class="col-lg-6">
                    <div class="about_content pl-0 wow fadeInRight">
                        <p>
                            Мы осуществляем взыскание с соблюдением требований российского законодательства:
                        </p>
                        <ul>
                            <li>
                                Закон Российской Федерации от 27 июля 2006г. №152-ФЗ «О персональных данных».
                            </li>
                            <li>
                                Закон Российской Федерации от 27 июля 2006г. №149-ФЗ «Об информации, информационных.
                                технологиях и защите информации».
                            </li>
                            <li>
                                Закон Российской Федерации от 03.07.2016г №230-ФЗ «О защите прав и законных интересов.
                                физических лиц при осуществлении деятельности по возврату просроченной задолженности».
                            </li>
                        </ul>
                        {{--<a href="/about" class="theme_btn">подробнее о компании</a>--}}
                    </div>
                </div>
            </div>

            <div class="row align-items-center flex-row-reverse" style="height: 3em;">
            </div>

        </div>
    </section>
    <!--work_area finance-->


    {{--<!--work_area ЖК и УК-->
    <section class="work_area sec_pad2 bg_color">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-12">
                    <h6>УК и ЖКХ</h6>
                    <h2>Услуги в сфере ЖКХ</h2>
                </div>
            </div>

            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="about_content pl-0 wow fadeInLeft">
                        <p>

                            В результате нашего сотрудничества:
                            Поступление денежных средств на расчетный счет в кратчайшие сроки с начала обработки реестра
                            (в течение 2-х недель)
                            Повышение платежной дисциплины населения на обслуживаемой территории.
                            Получение передового опыта взыскания и управления дебиторской задолженностью.
                        </p>
                        <p>
                            Наша работа:
                        </p>
                        <ul>
                            <li>
                                Выезд по 100% должников в переданном реестре – установление контакта с
                                неплательщиками.
                            </li>
                            <li>Консультации по вариантам и способам погашения.</li>
                            <li>Телефонные переговоры – контроль платежей, мотивация на оплату.</li>
                            <li>Взыскание на досудебной и судебной стадии.</li>
                        </ul>

                        <p>
                            Мы осуществляем взыскание с соблюдением требований российского законодательства:
                        </p>
                        <ul>
                            <li>Закон Российской Федерации от 27 июля 2006г. №152-ФЗ «О персональных данных».</li>
                            <li>
                                Закон Российской Федерации от 27 июля 2006г. №149-ФЗ «Об информации, информационных
                                технологиях и защите информации».
                            </li>
                            <li>
                                Закон Российской Федерации от 03.07.2016г №230-ФЗ «О защите прав и законных интересов
                                физических лиц при осуществлении деятельности по возврату просроченной задолженности».
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <img class="img-fluid" src="{{ asset('citrix/assets/img/services/stairs.jpg') }}" alt=""/>
                </div>
            </div>
        </div>
    </section>
    <!--work_area ЖК и УК-->--}}

@endsection
