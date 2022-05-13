<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageContactFormRequest;
use App\Mail\MessageContactForm;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    /**
     * @param MessageContactFormRequest $request
     * @return string
     */
    public function sendEmail(MessageContactFormRequest $request): string
    {
        Log::alert("MessageContactFormRequest = ", $request->validated());

//        Mail::to(config('mail.custom.to'))
//            ->bcc('yagithub@mail.ru')
//            ->send(new MessageContactForm($request->validated()));
//
//        session()->flash('message', 'Сообщение успешно отправлено');
        session()->flash('message', 'Сообщение успешно поставлено в очередь отправки');

        return redirect(route('contacts') . '#feedback');
    }
}
