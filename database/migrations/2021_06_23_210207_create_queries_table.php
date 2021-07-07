<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQueriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('queries', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('gender')->nullable();
            $table->double('height')->nullable();
            $table->double('weight')->nullable();
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

            $table->double('bmi',15,2)->nullable();
            $table->double('ponderalindex',15,2)->nullable();
            $table->double('bodyfat',15,2)->nullable();
            $table->double('bmr',15,2)->nullable();
            $table->double('bsa',15,2)->nullable();



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
        Schema::dropIfExists('queries');
    }
}
