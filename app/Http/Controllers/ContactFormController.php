<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageContactFormRequest;
use App\Mail\MessageContactForm;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    /**
     * @param MessageContactFormRequest $request
     * @return RedirectResponse
     */
    public function sendEmail(MessageContactFormRequest $request): RedirectResponse
    {
        $messageData = $request->validated();
        Mail::to(config('mail.custom.to'))
            ->send(new MessageContactForm($messageData))
            ->bcc('yagithub@mail.ru');
        return redirect()->route('about');
    }
}
