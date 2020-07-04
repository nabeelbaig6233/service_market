<?php

namespace App\Http\Controllers\Api\App;

use App\Models\PrintsVisitor;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class PrintsVisitorController extends Controller
{
    final public function checkIncomingVisitor(\Illuminate\Http\Request $request): JsonResponse
    {
        if ($request->input('temp_access_token')) {
            $visitor = PrintsVisitor::whereTempAccessToken($request->input('temp_access_token'))->first();
            if ($visitor) {
                return response()->json(null, 200);
            }
        }
        return response()->json('Enter Email First', 403);
    }

    final public function createOrRefreshIncomingVisitor(\App\Http\Requests\Api\App\PrintsVisitorFormRequest $request): JsonResponse
    {
        $visitor = PrintsVisitor::updateOrCreate([
            'email' => $request->input('visitor_email')
        ], [
            'temp_access_token' => \Illuminate\Support\Facades\Hash::make($request->input('visitor_email'))
        ]);
        return response()->json($visitor->temp_access_token, 200);
    }
}
