<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matrices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Saturday', 100);
            $table->string('Sunday', 100);
            $table->string('Monday', 100);
            $table->string('Tuesday', 100);
            $table->string('Wednesday', 100);
            $table->string('Thursday', 100);
            $table->integer('classroom_id')->unsigned();
            // Foregin key
            $table->foreign('classroom_id')->references('id')->on('classrooms');
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
        Schema::dropIfExists('matrices');
    }
}
