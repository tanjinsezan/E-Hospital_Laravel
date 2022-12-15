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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('dname');
            $table->string('dob');
            $table->string('email');
            $table->string('phone');
            $table->string('speciality');
            $table->bigInteger('hid') -> unsigned();
            $table->foreign('hid') -> references('id')-> on('hospitals') -> onDelete('cascade');
            $table->string('hname');
            $table->string('password');
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
        Schema::dropIfExists('hospitals');
    }
};
