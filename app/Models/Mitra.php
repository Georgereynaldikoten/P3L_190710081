<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Mitra as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Mitra extends Model
{
    protected $table = 'mitras';
    protected $primaryKey = 'id';
    protected $fillable = [
        
        'mitra_name',
        'mitra_asset',
        'mitra_address',
        'mitra_phone_number',
        'mitra_identity_number',
                        
    ];

    protected $hidden = [
        'mitra_identity_number',
    ];
    


}
