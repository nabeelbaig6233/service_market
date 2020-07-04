<?php

namespace App\Http\Controllers\Api\App;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class SalePictureInquirerController extends Controller
{
    final public function inquireForPicture(\App\Http\Requests\Api\App\PrintInquiryFormRequest $request): JsonResponse
    {
        $request = new \Illuminate\Http\Request($request->validated());
        \App\Models\SalePictureInquirer::whereInquirerEmail($request->input('inquirer_email'))->firstOrCreate($request->except('picture_id'))->inquiries()->attach($request->input('picture_id'));
        return response()->json('Inquiry Sent', 200);
    }

    final public function getSalePictures(): JsonResponse
    {
        $pictures = \App\Models\SalePicture::select('id', 'display_path')->paginate(6);
        return response()->json(['pictures' => $pictures], 200);
    }
}
