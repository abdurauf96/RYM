<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->integer('region_id');
            $table->integer('district_id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('advantages')->nullable();
            $table->text('body')->nullable();
            $table->string('image_preview')->nullable();
            $table->text('images')->nullable();
            $table->string('created_date')->nullable();
            $table->string('featured')->nullable();
            $table->string('slug')->unique();
            $table->string('teacher_name')->nullable();
            $table->string('teacher_position')->nullable();
            $table->string('teacher_photo')->nullable();
            $table->text('teacher_about')->nullable();
            $table->text('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_keywords')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
