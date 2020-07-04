<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    final public function index(): JsonResponse
    {
        $users = User::whereRole('member')->select('id', 'first_name', 'last_name', 'email')->get();
        return response()->json($users, 200);
    }

    final public function deleteUser(User $user): JsonResponse
    {
        if ($user->role === 'member') {
            try {
                $user->delete();
                return response()->json('Customer Deleted', 200);
            } catch (\Exception $e) {
                return response()->json('Error: ' . $e->getMessage() . ' in ' . $e->getFile() . ' in Line: ' . $e->getLine(), $e->getCode());
            }
        }

        return response()->json('Access Denied', 200);
    }
}
