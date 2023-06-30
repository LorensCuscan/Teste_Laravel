<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $timestamps = false;

<<<<<<< HEAD
    protected $casts = [
        'birth_date'  => 'date:d/m/Y',
        'created_at' => 'datetime:d/m/Y H:i:s',
        'password' => 'hashed',
    ];

=======
>>>>>>> 2ffffecf59e4b599398bdb648105f5d5c53ef700
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'birth_date',
        'creation_date'
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
<<<<<<< HEAD
=======
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'password' => 'hashed',
>>>>>>> 2ffffecf59e4b599398bdb648105f5d5c53ef700
    ];
}
