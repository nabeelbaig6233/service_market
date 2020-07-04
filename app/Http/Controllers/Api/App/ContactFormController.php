<?php

namespace App\Http\Controllers\Api\App;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use App\Http\Requests\Api\App\ContactFormRequest;

class ContactFormController extends Controller
{
    final public function submitContactForm(ContactFormRequest $request): \Illuminate\Http\JsonResponse
    {
        ContactForm::create($request->validated());
        return response()->json('Form successfully submitted, we\'ll contact you as soon as possible', 200);
    }
}
