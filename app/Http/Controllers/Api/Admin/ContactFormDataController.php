<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactFormDataController extends Controller
{
    final public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(ContactForm::all());
    }

    final public function deleteContactForm(ContactForm $contactForm): \Illuminate\Http\JsonResponse
    {
        try {
            $contactForm->delete();
            return response()->json('Contact Form Deleted Successfully', 200);
        } catch (\Exception $e) {
            return response()->json('Error: ' . $e->getMessage() . ' in ' . $e->getFile() . ' in Line: ' . $e->getLine(), $e->getCode());
        }
    }
}
