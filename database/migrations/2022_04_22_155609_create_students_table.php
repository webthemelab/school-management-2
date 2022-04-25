<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('roll');
            $table->string('registration');
            $table->string('class_id');
            $table->string('section_id');
            $table->string('student_year');
            $table->string('student_name');
            $table->string('father_name');
            $table->string('dob');
            $table->string('mother_name');
            $table->string('email');
            $table->string('guardian_phone');
            $table->string('present_vill');
            $table->string('present_post');
            $table->string('present_thana');
            $table->string('present_dist');
            $table->string('perma_vill');
            $table->string('perma_post');
            $table->string('perma_thana');
            $table->string('perma_dist');
            $table->string('image');
            $table->string('signature');
            $table->string('status');
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
