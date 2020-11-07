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
# Message from ContactForm

{{ $messageData['message'] }}

Thanks, {{ config('app.name') }}
@endcomponent

