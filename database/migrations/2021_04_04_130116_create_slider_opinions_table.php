<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderOpinionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_opinions', function (Blueprint $table) {
            $table->id();
            $table->string('author')->nullable();
            $table->string('image')->nullable();
            $table->string('profession')->nullable();
            $table->text('body')->nullable();
            $table->text('number_stars')->nullable();
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
        Schema::dropIfExists('slider_opinions');
    }
}
