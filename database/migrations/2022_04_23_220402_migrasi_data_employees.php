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
        Schema::dropIfExists('employees');
        Schema::create('employees', function (Blueprint $table) {
            $table->id()->increments()->unsigned()->unique();
            $table->foreignId('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_role')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
            $table->string('employee_name');
            $table->string('employee_address');
            $table->date('employee_birth_date');
            $table->enum('employee_gender', ['male', 'female']);
            $table->string('employee_phone_number');
            $table->string('employee_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
