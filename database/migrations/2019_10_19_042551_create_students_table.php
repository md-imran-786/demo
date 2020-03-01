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
            $table->string('student_name');
            $table->string('father_name');
            $table->string('mother_name');

             $table->integer('roll')->unique();
            $table->integer('registration_no')->nullable();
             $table->integer('technology_id')->unsigned();
             $table->foreign('technology_id')->references('id')->on('technologies');
            $table->integer('session_id')->unsigned();
            $table->foreign('session_id')->references('id')->on('sessions');
            $table->integer('ssc_roll')->unique();
            $table->string('mobile_no')->nullable();

            $table->string('email');
            $table->mediumText('present_address')->nullable();
            $table->mediumText('permanent_address')->nullable();

            $table->string('document_requirement')->nullable();

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
