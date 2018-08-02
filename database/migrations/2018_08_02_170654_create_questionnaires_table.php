<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


     public function up()
     {
       Schema::dropIfExists('questionnaires');

         Schema::create('questionnaires', function (Blueprint $table) {
             $table->increments('questionnaire_id');

             $table->unsignedInteger('category_id');

             $table->unsignedInteger('level_id');

             $table->unsignedInteger('question_id');


         });

         Schema::table('questionnaires', function($table) {
           $table->foreign('question_id')->references('question_id')->on('questions')->onDelete('cascade');
           $table->foreign('level_id')->references('level_id')->on('levels')->onDelete('cascade');
          $table->foreign('category_id')->references('category_id')->on('categorys')->onDelete('cascade');
           //

        });


        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionnaires');
    }
}
