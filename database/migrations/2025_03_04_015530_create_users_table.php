<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('username', 100)->nullable(false)->unique('users_username_unique');
            $table->string('email', 100)->nullable(false)->unique('users_email_unqiue');
            $table->string('password', 100)->nullable(false);
            $table->string('name', 100)->nullable(false);
            // $table->string('token', 100)->nullable(false)->unique('users_token_unique');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
