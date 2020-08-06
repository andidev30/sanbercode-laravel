<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_questions', function (Blueprint $table) {
            $table->id();
            $table->string("isi");
            $table->integer("pertanyaan_id");
            $table->integer("profile_id");
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
        Schema::dropIfExists('comment_questions');
    }
}
