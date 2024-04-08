<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refills extends Model
{
    use HasFactory;

    //protected $table = 'players';     

    protected $fillable = [        
        'id',
        'player_id',
        'num_op',
        'id_attention_channel',        
        'id_bank',
        'amount',
        'date_refills',
        'hour_refills',
        'image_refills',        
    ];

    protected $hidden = [
        'created_at',
        'updated_at'    
    ];  
    
    public function bank()
    {
        return $this->belongsTo(Banks::class , "id_bank" );
    }

    public function channel()
    {
        return $this->belongsTo(AttentionChannel::class , "id_attention_channel" );
    } 
   
}