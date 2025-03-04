<?php

namespace App\Services;

interface UserServices
{
    public function login(array $credentials, bool $remember):void;
}