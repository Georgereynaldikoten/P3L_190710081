<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Promo as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Promo extends Model
{
    use HasFactory;
    protected $table = 'promos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'promo_code',
        'promo_type',
        'promo_status',
        'promo_description',
        'discount_percent',
    ];

}
