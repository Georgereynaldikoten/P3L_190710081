<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('cars');
        Schema::create('cars', function (Blueprint $table) {
            $table->id()->increments()->unsigned()->unique();
            $table->foreignId('id_mitra')->nullable()->references('id')->on('mitras');
            $table->string('car_name');
            $table->string('car_tipe');
            $table->string('car_transmisi');
            $table->string('car_fuel');
            $table->string('car_color');
            $table->integer('car_trunk_volume')->nullable();
            $table->string('car_facilities')->nullable();
            $table->integer('car_rent_price');
            $table->string('car_asset_category');
            $table->string('no_plat_car');
            $table->string('car_fuel_volume');
            $table->date('car_contract_start');
            $table->date('car_contract_end');
            $table->date('car_date_service');
            $table->string('car_registration_number');
            $table->string('car_image')->nullable();                        
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
