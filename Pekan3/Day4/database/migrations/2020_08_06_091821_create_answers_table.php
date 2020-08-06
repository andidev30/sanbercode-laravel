<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->string("isi");
            $table->date("tangal_diperbaharui");
            $table->integer("pertanyaan_id")->unsigned();
            $table->integer("profile_id")->unsigned();


            $table->foreign("pertanyaan_id")->references("id")->on("questions");
            $table->foreign("profile_id")->references("id")->on("profiles");
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
        Schema::dropIfExists('answers');
    }
}
