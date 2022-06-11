<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Carbon\Carbon;

class Employee extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'employees';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'id_role',
        'employee_name',
        'employee_address',
        'employee_birth_date',
        'employee_gender',
        'employee_phone_number',
        'employee_image',
        
    ];

  
public function getBirthDateAttribute()
    {
        return Carbon::createFromFormat('YYYY-mm-dd', $this->attributes['employee_birth_date'])->format('d-m-Y');
    }
    
    public function getBirthPegawaiDateAttribute()
    {
        return Carbon::createFromFormat('YYYY-mm-dd', $this->attributes['employee_birth_date'])->format('d-m-Y');
    }

    
}
