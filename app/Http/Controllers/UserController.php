<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Services\UserServices;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    private UserServices $userServices;

    public function __construct(UserServices $userServices) {
        $this->userServices = $userServices;
    }

    public function login(UserLoginRequest $request):JsonResponse
    {
        try{
            $credentials = $request->validated();
            $remember = $request->has('remember');

            $this->userServices->login($credentials, $remember);
    
            return response()->json([
                "data" => [
                    "Success"
                ]
            ])->setStatusCode(201);

        }catch(\Exception $e) {
            return response()->json([
                "data" => [
                    "errors" => $e->getMessage()
                ]
            ])->setStatusCode(401);
        }

    }
}
