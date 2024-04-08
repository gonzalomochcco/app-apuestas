<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;

    protected $table = 'user_information'; 

    protected $fillable = [        
        'id',
        'id_user',        
        'name',
        'lastname',
        'phone',
        'profile_picture',
        'created_at',
        'updated_at'    
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
    */
    protected $hidden = [        
        //'created_at',
        //'updated_at'    
    ];

}
