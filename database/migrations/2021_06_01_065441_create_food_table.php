<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->default('default.png');
            $table->string('foodgroup')->default(0.00);
            $table->double('calories')->default(0.00);
            $table->double('fat')->default(0.00);
            $table->double('protein')->default(0.00);
            $table->double('carbohydrate')->default(0.00);
            $table->double('sugars')->default(0.00);
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('food');
    }
}
