<?php

namespace App\Services\ServiceImpls;

use App\Services\UserServices;
use Exception;
use Illuminate\Support\Facades\Auth;

class UserServiceImpl implements UserServices
{

    public function login(array $credentials, bool $remember): void
    {
        $authorized = Auth::attempt([
            'username' => $credentials['usernameOrEmail'],
            'password' => $credentials['password']
        ], $remember);

        if(!$authorized){
            $authorized = Auth::attempt([
                'email' => $credentials['usernameOrEmail'],
                'password' => $credentials['password']
            ], remember: $remember);
        }

        if(!$authorized){
            throw new Exception();
        }

    }

}