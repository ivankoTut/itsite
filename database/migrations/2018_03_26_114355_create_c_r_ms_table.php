<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCRMsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_r_m_s', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date')->nullable();
            $table->integer('kat')->default(0);
            $table->text('name',191)->nullable();
            $table->integer('time')->default(1);
            $table->integer('price')->default(10);
            $table->integer('user')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('c_r_m_s');
    }
}
