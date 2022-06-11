<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Car extends Model
{
    protected $table = 'cars';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'car_name',
        'car_type',
        'car_transmisi',
        'car_fuel',
        'car_color',
        'car_trunk_volume',
        'car_facilities',
        'car_rent_price',
        'car_asset_category',
        'no_plat_car',
        'car_fuel_volume',
        'car_contract_start',
        'car_contract_end',
        'car_date_service',
        'car_registration_number',
        'car_image',
    ];

    protected $hidden = [
        'car_registration_number',
    ];

 
    public function setPasswordAttribute($value)
    {
        $this->attributes['car_regsitration_number'] = bcrypt($value);
    }
    
    public function setContractStartDateAttribute($value)
    {
        $this->attributes['car_contract_start'] = Carbon::createFromFormat('dd/mm/YYYY', $value)->format('YYYY-mm-dd');
    }

    public function getContractStartDateAttribute()
    {
        return Carbon::createFromFormat('YYYY-mm-dd', $this->attributes['car_contract_start'])->format('d-m-Y');
    }

    public function setContractEndDateAttribute($value)
    {
        $this->attributes['car_contract_end'] = Carbon::createFromFormat('dd/mm/YYYY', $value)->format('YYYY-mm-dd');
    }

    public function getContractEndDateAttribute()
    {
        return Carbon::createFromFormat('YYYY-mm-dd', $this->attributes['car_contract_end'])->format('d-m-Y');
    }

}
