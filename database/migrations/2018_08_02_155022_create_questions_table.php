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
       Schema::dropIfExists('questions');

         Schema::create('questions', function (Blueprint $table) {
             $table->increments('question_id');
             $table->string('question_name');
             $table->string('question_image'); //image
             $table->string('choices'); //image array of choices
             $table->string('is_correct'); //check sa array sa choices
             $table->time('standard_time'); //check sa array sa choices

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
