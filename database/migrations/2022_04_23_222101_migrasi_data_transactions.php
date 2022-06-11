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
        Schema::dropIfExists('transactions');
        Schema::create('transactions', function (Blueprint $table) {
            $table->id()->increments()->unsigned()->uniq();
            $table->foreignId('id_car')->references('id')->on('cars');
            $table->foreignId('id_driver')->nullable()->references('id')->on('drivers');
            $table->foreignId('id_employee')->references('id')->on('employees');
            $table->foreignId('id_customer')->references('id')->on('customers');
            $table->foreignId('id_promo')->nullable()->references('id')->on('promos');
            $table->string('customer_no_identity');
            $table->string('customer_no_driver_license')->nullable();
            $table->string('return_date');
            $table->date('date_transaction');
            $table->date('date_start_rental');
            $table->date('date_end_rental');
            $table->string('payment_method');
            $table->integer('total_price');
            $table->integer('total_price_discount')->nullable();
            $table->integer('total_fine_price')->nullable();
            $table->integer('grand_total_price');
            $table->enum('status_transaction', ['transaksi selesai', 'belum membayar']);
            $table->enum('transaction_tipe', ['dengan driver', 'tanpa driver']);
            $table->string('customer_comment')->nullable();
            $table->integer('driver_rating');
            $table->integer('rent_rating');
            $table->enum('document_status', ['sudah diverifikasi', 'belum diverifikasi']);
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
        Schema::dropIfExists('transaksi');
    }
};
