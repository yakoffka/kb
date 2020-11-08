{{--@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent--}}

@component('mail::message')
# Получено сообщение через форму обратной связи

@component('mail::table')
    | Laravel       | Table         | Example  |
    | ------------- |:-------------:| --------:|
    | Col 2 is      | Centered      | $10      |
    | Col 3 is      | Right-Aligned | $20      |
@endcomponent


{{ $messageData['message'] }}

Данное сообщение отправлено через форму обратной связи на сайте {{ config('app.name') }}
@endcomponent

