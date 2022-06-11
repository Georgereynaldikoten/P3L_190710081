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
        Schema::dropIfExists('detailshifts');
        Schema::create('detailshifts', function (Blueprint $table) {
            //$table->id('ID_DETAIL_SHIFT')->increments();
            $table->foreignId('id_shift')->nullable()->references('id')->on('shifts');
            $table->foreignId('id_employee')->nullable()->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailshifts');
    }
};
