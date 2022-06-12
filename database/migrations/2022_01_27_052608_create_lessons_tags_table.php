<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons_tags', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('lesson_id');
            $table->unsignedBigInteger('tag_id');

            $table->timestamps();

            // IDX
            $table->index('lesson_id', 'lesson_tag_lesson_idx');
            $table->index('tag_id', 'lesson_tag_tag_idx');

            // FX
            $table->foreign('lesson_id', 'lesson_tag_lesson_fx')->on('lessons')->references('id')->onDelete('cascade');
            $table->foreign('tag_id', 'lesson_tag_tag_fx')->on('tags')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons_tags');
    }
}
