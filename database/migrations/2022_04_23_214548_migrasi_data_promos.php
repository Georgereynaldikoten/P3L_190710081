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
        Schema::dropIfExists('promos');
        Schema::create('promos', function (Blueprint $table) {
            $table->id()->increments()->unsigned()->unique();
            $table->string('promo_code');
            $table->string('promo_type');
            $table->enum('promo_status', ['aktif', 'tidak aktif']);
            $table->string('promo_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promos');
    }
};
