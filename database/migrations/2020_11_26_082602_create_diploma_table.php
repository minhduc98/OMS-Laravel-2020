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
            $table->string("diplomaNumber", 50);
            $table->string("diplomaNote", 50);
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
        Schema::dropIfExists('diploma');
    }
}
