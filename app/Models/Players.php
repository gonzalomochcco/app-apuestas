<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;

    //protected $table = 'players';     

    protected $fillable = [        
        'id',
        'PlayerID',
        'dni',        
        'name',
        'lastname',
        'email',
        'phone',
        'lastname',
        'address',
        'birthdate',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'    
    ];

    protected $casts = [
        //'email_verified_at' => 'datetime',
    ];

    public function refills()
    {
        return $this->hasMany(Refills::class , "player_id" , "PlayerID" );
    }
    
}
