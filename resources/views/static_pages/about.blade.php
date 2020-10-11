@extends('layouts.' . (config('view.theme') ?? 'app') )

@section('title', __('About'))

@section('description', config('custom.main_description'))

@section('content')

    <!-- Process area -->
    <section class="process_area sec_pad bg_color">
        <div class="container">
            <div class="section_title text-center">
                <h6>Принципы нашей работы:</h6>
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
                         style="background: url('citrix/assets/img/about/process.jpg') no-repeat center center / contain;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Process area -->

@endsection
