<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body')->nullable();
            $table->string('history_block_title')->nullable();
            $table->string('opinion_block_title')->nullable();
            $table->text('opinion_block_body')->nullable();
            $table->string('opinion_block_author')->nullable();
            $table->string('opinion_author_image')->nullable();
            $table->string('feature_block_title')->nullable();
            $table->text('feature_block_body')->nullable();
            $table->string('team_block_title')->nullable();
            $table->text('team_block_description')->nullable();
            $table->string('seo_title')->nullable();
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
        Schema::dropIfExists('about_pages');
    }
}
