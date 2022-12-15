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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pid') -> unsigned();
            $table->foreign('pid') -> references('id')-> on('patients') -> onDelete('cascade');
            $table->string('pname');
            $table->string('age');
            $table->string('phone');
            $table->string('dname');
            $table->bigInteger('did') -> unsigned();
            $table->foreign('did') -> references('id')-> on('doctors') -> onDelete('cascade');
            $table->bigInteger('hid') -> unsigned();
            $table->foreign('hid') -> references('id')-> on('hospitals') -> onDelete('cascade');
            $table->string('hname');
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
        Schema::dropIfExists('appointments');
    }
};
