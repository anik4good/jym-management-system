<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userprofiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('gender')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('age')->nullable();
            $table->string('necksize')->nullable();
            $table->string('dietrestrictions')->nullable();
            $table->string('waist')->nullable();
            $table->string('bodyshape')->nullable();
            $table->string('lifestylehabit')->nullable();
            $table->string('bloodpresure')->nullable();
            $table->string('bloodsugar')->nullable();
            $table->string('foodhabit')->nullable();
            $table->string('targetfitness')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('userprofiles');
    }
}
