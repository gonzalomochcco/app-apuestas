<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttentionChannel extends Model
{
    use HasFactory;

    protected $table = 'attention_channel'; 

    protected $fillable = [        
        'id',
        'name',
        'created_at',
        'updated_At'                
    ];

}
