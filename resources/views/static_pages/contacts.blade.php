@extends('layouts.' . (config('view.theme') ?? 'app') )

@section('title')
Контактная информация ООО&nbsp;«КБ&nbsp;911»
@stop

@section('description', config('custom.main_description')
    . 'Контакты коллекторского бюро ООО&nbsp;«КБ&nbsp;911». Обратная связь, коллекторское бюро ООО&nbsp;«КБ&nbsp;911» на карте, адреса и телефоны.')

@section('content')

    <!--work_area-->
    <section class="work_area sec_pad bg_color">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-12">
                    {{--<h6>Есть вопросы?</h6>--}}
                    <h2>Свяжитесь с нами любым удобным для Вас способом</h2>
                </div>
            </div>

            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="about_content pl-0 wow fadeInLeft">
                        <p>
                            Мы всегда готовы ответить на Ваши вопросы и
                            оказать квалифицированную помощь!
                        </p>
                        <p>
                            Режим работы:<br>
                            Пн-Пт с 10:00 - 18:00<br>
                            Сб и Вс - выходной
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <img class="img-fluid" src="{{ asset('storage/contacts/contacts1_1280×696.jpg') }}" alt="" />
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
                                {{--<p>
                                    143500, Московская обл.,  г. Истра, д. Андреевское, ул. Луговая, д. 69
                                </p>--}}
                                <p>
                                    123557, г. Москва, ул. Малая Грузинская, 28, офис 10ц
                                </p>
                            </div>
                        </div>
                        <div class="media c_info_item">
                            <div class="icon"><i class="fas fa-phone"></i></div>
                            <div class="media-body">
                                <h5>Телефоны</h5>
                                <p>
                                     <span>
                                        <a href="tel:+7(499)44-49-118">+7(499)44-49-118</a>
                                    </span>
                                    <span>
                                        <a href="tel:+7(985)40-40-911">+7(985)40-40-911</a>
                                    </span>
                                    <span>
                                        <a href="tel:+7(985)01-17-911">+7(985)01-17-911</a>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="media c_info_item">
                            <div class="icon"><i class="fas fa-envelope"></i></div>
                            <div class="media-body">
                                <h5>Email адрес</h5>
                                <p>
                                    <a href="mailto:email@kb911.su">kb911@kb911.su</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <?php
                    // $dump = [
                    //     'name' => 'Акакий Акакиевич',
                    //     'email' => 'email@test.test',
                    //     'subject' => 'Тестирование',
                    //     'message' => 'Соединённые Штаты Америки официально становятся первым государством, полностью управляемым не пойми кем через средства массовой информации и социальные сети.',
                    // ];
                ?>
                {{-- закомментировано в целях борьбы со спамом 2022-05-13. ya
                <div class="col-lg-6">
                    <div class="contact_inner">
                        <h2 id="feedback">Отправить сообщение</h2>
                        <form action="{{ route('contactForm.send') }}" method="POST" --}}{{--id="contactForm" novalidate="novalidate"--}}{{--
                              class="row contact_form">

                            @method('POST')

                            @csrf

                            <div class="col-lg-12 form-group">
                                <input class="form-control" type="text" id="name" name="name"
                                       placeholder="Ваше имя" value="{{ old('name') ?? ($dump['name'] ?? '') }}" required/>
                            </div>

                            <div class="col-lg-12 form-group">
                                <input class="form-control" type="email" id="email" name="email"
                                       placeholder="Email" value="{{ old('email') ?? ($dump['email'] ?? '') }}" required/>
                            </div>

                            <div class="col-lg-12 form-group">
                                <input class="form-control" type="text" id="subject" name="subject"
                                       placeholder="Тема сообщения" value="{{ old('subject') ?? ($dump['subject'] ?? '') }}" required/>
                            </div>

                            <div class="col-lg-12 form-group">
                                <textarea class="form-control" name="message" id="message" cols="30" rows="10"
                                          placeholder="Сообщение">{{ old('message') ?? ($dump['message'] ?? '') }}</textarea>
                            </div>

                            <div class="col-lg-12 text-right form-group">
                                <button type="submit" class="btn btn-primary">отправить</button>

                            </div>
                        </form>
                        <div id="success">Your message succesfully sent!</div>
                        <div id="error">Opps! There is something wrong. Please try again</div>
                    </div>
                </div>
                --}}
            </div>
        </div>
    </section>
    <!--contact_area-->
    <section class="map_area">
        <div id="mapBox2"
             class="mapBox1"
             data-marker="citrix/assets/img/location.png"
             data-lat="55.766916"
             data-lon="37.573088"
             data-zoom="13"
             data-info="123557, г. Москва, ул. Малая Грузинская, 28, офис 10ц"
             datad-mlat="55.949345"
             data-mlon="36.879409"
        >
        </div>
    </section>
@endsection
