<?php

namespace Tests\Feature;

use App\Services\UserServices;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
    private UserServices $userServices;

    protected function setUp(): void
    {
        parent::setUp();

        $this->userServices = $this->app->make(UserServices::class);
    }

    public function testName()
    {
        self::assertTrue(true);
    }

    public function testLogin()
    {
        $data = [
            "usernameOrEmail" => "haryrangers25@gmail.com",
            "password" => "Haryyy_*"
        ];

        $this->post('/login', $data)->assertStatus(201)->assertJson([
            "data" => [
                "Success"
            ]
        ]);
    }
}
