<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonUserFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_user_favorites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lesson_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->index('lesson_id', 'luf_lesson_idx');
            $table->index('user_id', 'luf_uer_idx');

            $table->foreign('lesson_id', 'luf_lesson_fk')->on('lessons')->references('id')->onDelete('cascade');
            $table->foreign('user_id', 'luf_user_fk')->on('users')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson_user_favorites');
    }
}
