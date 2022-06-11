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
        Schema::dropIfExists('customers');
        Schema::create('customers', function (Blueprint $table) {
            $table->id( )->increments()->unsigned()->unique();
            $table->foreignId('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('customer_name');
            $table->string('customer_address');
            $table->date('customer_birth_date');
            $table->enum('customer_gender', ['male', 'female']);
            $table->string('customer_phone_number');
            $table->string('profil_picture')->nullable();
            $table->string('customer_document_identity')->nullable();
            $table->string('customer_driver_license')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
};