<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeDislikeQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_dislike_question', function (Blueprint $table) {
            $table->id();
            $table->integer("pertanyaan_id")->unsigned();
            $table->integer("profile_id")->unsigned();
            $table->integer("point");
            $table->timestamps();

            $table->foreign("profile_id")->references("id")->on("profiles");
            $table->foreign("pertanyaan_id")->references("id")->on("questions");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like_dislike_question');
    }
}
