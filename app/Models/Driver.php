<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
//use Laravel\Passport\HasApiTokens;
use Carbon\Carbon;

class Driver extends Model
{
    use HasApiTokens, Notifiable;
    use HasFactory;
    protected $table = 'drivers';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'driver_name',
        'driver_address',
        'driver_birth_date',
        'driver_gender',
        'driver_phone_number',
        'driver_language',
        'driver_profile_picture',
        'driver_rate',
        'driver_license',
        'napsah_letter',
        'soul_healthy_letter',
        'physical_healthy_letter',
        'skck_letter',
        'total_driver_rating',
        'available_status',
        

    ];

   

public function getBirthDateAttribute()
    {
        return Carbon::createFromFormat('YYYY-mm-dd', $this->attributes['driver_birth_date'])->format('d-m-Y');
    }
    
    public function getBirthPegawaiDateAttribute()
    {
        return Carbon::createFromFormat('YYYY-mm-dd', $this->attributes['driver_birth_date'])->format('d-m-Y');
    }

    
}
