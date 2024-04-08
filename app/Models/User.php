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

    //protected $table = 'users';     

    protected $fillable = [        
        'id',
        'email',        
        'id_state',
        'id_rol'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'created_at',
        'updated_at'    
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
    */
    protected $casts = [
        //'email_verified_at' => 'datetime',
    ];

    public function information()
    {
        return $this->hasOne(UserInformation::class , "id_user" );
    }

    public function rol()
    {
        return $this->belongsTo(Roles::class , "id_rol" );
    }

    public function state()
    {
        return $this->belongsTo(State::class , "id_state" );
    }    

}