<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->integer("major_id");
            $table->string("courseName", 50);
            $table->string("courseName_v", 50);
            $table->string("courseCode", 20);
            $table->string("summary", 200);
            $table->integer("totalHour");
            $table->integer("lectureHour");
            $table->integer("labHour");
            $table->integer("ECTS");
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
        Schema::dropIfExists('course');
    }
}
