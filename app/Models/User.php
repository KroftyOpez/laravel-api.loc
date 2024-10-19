<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{

    use HasFactory, Notifiable, HasApiTokens;


    protected $fillable = [
        'surname',
        'name',
        'sex',
        'birthday',
        'login',
        'password',
        'role_id',
        'email',
        'patronymic',

    ];


    protected $hidden = [
        'password',
        'api_token',

    ];


    protected function casts(): array
    {
        return [
            'birthday' => 'date',
            'password' => 'hashed',
        ];
    }
    public function role(){
        return $this->belongsTo(Role::class);
    }
}
