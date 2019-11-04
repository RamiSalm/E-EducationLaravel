<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('email', 100);
            $table->integer('classbranch_id')->unsigned();
            $table->integer('father_id')->unsigned();
            $table->integer('school_id')->unsigned();
            $table->integer('directorate_id')->unsigned();
            $table->integer('ministrie_id')->unsigned();
            // Foregin key
            $table->foreign('classbranch_id')->references('id')->on('classrooms');
            $table->foreign('father_id')->references('id')->on('fathers');
            $table->foreign('school_id')->references('id')->on('schools');
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
        Schema::dropIfExists('students');
    }
}
