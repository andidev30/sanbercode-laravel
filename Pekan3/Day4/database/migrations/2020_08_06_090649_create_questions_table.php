<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string("judul");
            $table->string("isi");
            $table->timestamps();
            $table->date("tanggal_diperbaharui");
            $table->integer("jawaban_tepat_id")->unsigned()->unique();
            $table->integer("profile_id")->unsigned();


            $table->foreign("jawaban_tepat_id")->references("id")->on("answers");
            $table->foreign("profile_id")->references("id")->on("profiles");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
