<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;

class AuthController extends Controller
{
    final public function login(LoginRequest $request) /*\Psr\Http\Message\StreamInterface*/ /*\Illuminate\Http\JsonResponse*/
    {
        // 1. Get Respected User Using Provided Email
        $user = User::where('email', '=', $request->input('email'))->first();

        // 2. Return 401 Response If No User Is Found
        if ($user === null) {
            return response()->json('Invalid Credentials', 401);
        }

        // 3. Check If Login Attempt Is For Admin
        $role = $request->input('role') ?? 'user';
        if ($user->role !== $role) {
            return response()->json('Invalid Credentials', 401);
        }

        // 4. Return 401 Response If Given Password Is Incorrect
        if (!Hash::check($request->input('password'), $user->password)) {
            return response()->json('Invalid Credentials', 401);
        }

        // 5. Check If User Has Already Access Token Stored In Database And Delete Them
        $existing_access_token_ids = DB::table('oauth_access_tokens')->where('user_id', '=', $user->id)->pluck('id');
        DB::table('oauth_access_tokens')->whereIn('id', $existing_access_token_ids)->delete();
        DB::table('oauth_refresh_tokens')->whereIn('access_token_id', $existing_access_token_ids)->delete();
        // 6. Return New Access Token & Refresh Token
        return (new Client())->request('POST', route('passport.token'), [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => config('services.passport.client_ID'),
                'client_secret' => config('services.passport.client_secret'),
                'username' => $request->input('email'),
                'password' => $request->input('password'),
            ],
        ])->getBody();
    }

    final public function refreshToken(Request $request): \Psr\Http\Message\StreamInterface
    {
        // 1. Get New Access Tokens And Refresh Tokens Using Previous Provided Refresh Token
        return (new Client())->request('POST', route('passport.token'), [
            'form_params' => [
                'grant_type' => 'refresh_token',
                'refresh_token' => $request->input('refresh_token'),
                'client_id' => config('services.passport.client_ID'),
                'client_secret' => config('services.passport.client_secret'),
            ],
        ])->getBody();
    }

    final public function register(RegistrationRequest $request): JsonResponse
    {
        $request = new Request($request->validated());

        // 1. Create A New User And Return Created User Details
        $request->merge(['password' => Hash::make($request->input('password'))]);
        User::create($request->all());

        return response()->json('Customer Created', 200);
    }

    final public function logout(): \Illuminate\Http\JsonResponse
    {
        // 1. Get All The Access Tokens & Refresh Tokens Ids From The Database
        $access_token_ids = auth()->user()->tokens->pluck('id')->toArray();
        $refresh_token_ids = DB::table('oauth_refresh_tokens')->select('id')->whereIn('access_token_id', $access_token_ids)->get()->pluck('id')->toArray();

        // 2. Delete All The Access Tokens & Refresh Tokens From The Database
        DB::table('oauth_access_tokens')->whereIn('id', $access_token_ids)->delete();
        DB::table('oauth_refresh_tokens')->whereIn('id', $refresh_token_ids)->delete();

        // 3. Return Success Response
        return response()->json('Logged Out Successfully', 200);
    }
}
