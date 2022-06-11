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
        Schema::dropIfExists('mitras');
        Schema::create('mitras', function (Blueprint $table) {
            $table->id()->increments()->unsigned()->unique();
            $table->string('mitra_name');
            $table->string('mitra_asset');
            $table->string('mitra_address');
            $table->string('mitra_phone_number');
            $table->string('mitra_identity_number');
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
        Schema::dropIfExists('mitras');
    }
};
