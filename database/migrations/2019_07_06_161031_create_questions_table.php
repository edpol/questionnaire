<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->bigInteger('order')->unsigned()->index(); // we are allowing duplicates for more flexibility
            $table->unsignedBigInteger('heading_id')->nullable();
            $table->foreign('heading_id')->references('id')->on('headings')->onDelete('cascade');
            $table->text('question');
            $table->enum('type', ['checkbox','radio','option']);
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
        Schema::dropIfExists('questions');
    }
}
