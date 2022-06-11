<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\DetailShift as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class DetailShift extends Model
{
    use HasFactory;
    protected $table = 'detailshifts';
    protected $fillable = [
        'id_shift',
        'id_employee',
    ];
}
