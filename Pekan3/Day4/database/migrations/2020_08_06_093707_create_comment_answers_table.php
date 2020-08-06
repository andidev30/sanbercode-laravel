<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_answers', function (Blueprint $table) {
            $table->id();
            $table->string("isi");
            $table->integer("jawaban_id");
            $table->integer("profile_id");
            $table->timestamps();

            $table->foreign("profile_id")->references("id")->on("profiles");
            $table->foreign("jawaban_id")->references("id")->on("answers");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_answers');
    }
}
