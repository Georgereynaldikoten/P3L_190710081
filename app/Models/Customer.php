<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//use Laravel\Sanctum\HasApiTokens;
use Laravel\Passport\HasApiTokens;
use Carbon\Carbon;

class Customer extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'customers';
    protected $primaryKey = 'id';
   public $timestamps = false;

    protected $fillable = [
        'id_user',
        'customer_name', 
        'customer_address', 
        'customer_birth_date',
        'customer_gender',
        'customer_phone_number',
        'profil_picture',
        'customer_document_identity',
        'customer_driver_license',
    ];

  
    protected $hidden = [
        'password',
    ];

 
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
    

    public function setBirthDateAttribute($value)
    {
        $this->attributes['customer_birth_date'] = Carbon::createFromFormat('dd/mm/YYYY', $value)->format('YYYY-mm-dd');
    }

    public function getBirthDateAttribute()
    {
        return Carbon::createFromFormat('YYYY-mm-dd', $this->attributes['customer_birth_date'])->format('d-m-Y');
    }
    
    public function transaksi()
    {
    	return $this->hasMany('App\Transaksi');
    }


    


}
