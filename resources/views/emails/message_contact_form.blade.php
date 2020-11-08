@component('mail::message')
# Сообщение от пользователя

<table class="table_kb">
    <tr>
        <th>Пользователь</th>
        <td>{{ $messageData['name'] }}</td>
    </tr>
    <tr>
        <th>email</th>
        <td>{{ $messageData['email'] }}</td>
    </tr>
    <tr>
        <th>Тема</th>
        <td>{{ $messageData['subject'] }}</td>
    </tr>
</table>


{{ $messageData['message'] }}

<p class="notify">
    Сообщение отправлено через форму обратной связи сайта {{ config('app.url') }}
</p>
@endcomponent

