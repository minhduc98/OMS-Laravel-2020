<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiplomaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diploma', function (Blueprint $table) {
            $table->id();
            $table->string("ranking", 20);
            $table->string("ranking_v", 20);
            $table->integer("student_id");
            $table->integer("graduationYear");
            $table->string("acceptGraduation", 20);
            $table->string("diplomaNote", 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diploma');
    }
}
