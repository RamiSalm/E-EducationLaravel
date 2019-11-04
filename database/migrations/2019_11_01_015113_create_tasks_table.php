<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->text('body');
            $table->string('lecturer', 100);
            $table->integer('teacher_id')->unsigned();
            $table->integer('classbranch_id')->unsigned();
            $table->integer('school_id')->unsigned();
            // Foregin key
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('classbranch_id')->references('id')->on('classrooms');
            $table->foreign('school_id')->references('id')->on('schools');
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
        Schema::dropIfExists('tasks');
    }
}
