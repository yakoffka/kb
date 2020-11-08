@component('mail::message')
# Сообщение от пользователя

<table>
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

Данное сообщение отправлено через форму обратной связи на сайте {{ config('app.name') }}
@endcomponent

