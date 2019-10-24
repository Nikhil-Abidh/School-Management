<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('dob');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('image');
            $table->string('blood_grp');
            $table->string('gender');
            $table->string('position');
            $table->string('role');
            $table->string('password');
            $table->string('about');
            
            $table->string('father_name');
            $table->string('father_phone');
            $table->string('father_NID');
            $table->string('mother_name');
            $table->string('mother_phone');
            $table->string('mother_NID');

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
        Schema::dropIfExists('teachers');
    }
}
