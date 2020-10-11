@extends('layouts.' . (config('view.theme') ?? 'app') )

@section('title', __('Home'))

@section('description', config('custom.main_description'))

@section('content')
    <div class="text-justify text-white">
        <p>
            ООО «Бюро Возврата Долгов» независимое коллекторское агентство, работающее с дебиторской задолженностью граждан
            и организаций с 2011 года.
        </p>
        <p>
            Мы — динамично развивающаяся компания, обладающая обширными интеллектуальными и материальными ресурсами.
            Применяя новейшие информационные и правовые технологии, мы рассчитываем прочно занять лидирующее положение на
            рынке долгов Республики Хакасия.
        </p>
    </div>
@endsection
