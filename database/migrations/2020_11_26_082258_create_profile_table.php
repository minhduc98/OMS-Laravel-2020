<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->string("fullName", 50);
            $table->string("fullName_v", 50);
            $table->string("gender", 10);
            $table->string("DOB", 200);
            $table->string("DOB_v", 200);
            $table->string("POB", 50);
            $table->string("POB_v", 50);
            $table->string("Nationality", 50);
            $table->string("Ethnicity", 20);
            $table->string("Mail", 50);
            $table->string("PhoneNumber", 20);
            $table->string("MartialStatus", 20);
            $table->string("Address", 100);
            $table->string("City", 20);
            $table->string("Country", 20);
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
        Schema::dropIfExists('profile');
    }
}
