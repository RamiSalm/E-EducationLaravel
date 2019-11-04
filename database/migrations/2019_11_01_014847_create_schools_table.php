<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('mangement', 100);
            $table->string('email', 100);
            $table->integer('ministrie_id')->unsigned();
            $table->integer('directorate_id')->unsigned();
            // Foregin key
            $table->foreign('directorate_id')->references('id')->on('directorates');
            $table->foreign('ministrie_id')->references('id')->on('ministries');
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
        Schema::dropIfExists('schools');
    }
}
