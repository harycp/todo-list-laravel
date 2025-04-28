<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $keyType = "string";
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'username',
        'password',
        'name'
    ];
    
    protected $hidden = [
        "password",
        "remember_token"
    ];

    protected static function boot():void
    {
        parent::boot();

        static::creating(function($model){
            if(empty($model->id)) $model->id = (string) Str::uuid();

            $model->email = strtolower($model->email);
        });
    }


}
