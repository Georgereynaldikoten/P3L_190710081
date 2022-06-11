<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Transaksi as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Transaksi extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'transaksis';
    protected $primaryKey = 'id';
    use HasFactory;
    protected $fillable = [
        'id_car',
        'id_driver',
        'id_employee',
        'id_customer',
        'id_promo',
        'customer_no_identity',
        'customer_no_driver_license',
        'return_date',
        'date_transaction',
        'date_start_rental',
        'date_end_rental',
        'payment_method',
        'total_price',
        'total_price_discount',
        'total_fine_price',
        'grand_total_price',
        'status_transaction',
        'transaction_tipe',
        'customer_comment',
        'driver_rating',
        'rent_rating',
        'document_status',
       
    ];

    public function customer () {
        return $this->belongsTo('App\Customer', 'id_customer');    

}
}
