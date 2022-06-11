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
        Schema::dropIfExists('drivers');
        Schema::create('drivers', function (Blueprint $table) {
            $table->id()->increments()->unique()->unsigned();
            $table->foreignId('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('driver_name')->lenght(255);
            $table->string('driver_address')->lenght(255);
            $table->date('driver_birth_date');
            $table->enum('driver_gender', ['male', 'female']);
            $table->string('driver_phone_number')->lenght(12);
            $table->enum('driver_language', ['indonesia', 'inggris']);
            $table->string('driver_profile_picture')->nullable();
            $table->integer('driver_rate')->lenght(255);
            $table->string('driver_license')->nullable();
            $table->string('napsah_letter')->nullable();
            $table->string('soul_healthy_letter')->nullable();
            $table->string('physical_healthy_letter')->nullable();
            $table->string('skck_letter')->nullable();
            $table->integer('total_driver_rating')->length(255);
            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
};
