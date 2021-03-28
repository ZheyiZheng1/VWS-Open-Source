<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Silber\Bouncer\Database\Models;

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
            $table->timestamps();
            $table->string('answerValue');
            $table->bigInteger('question_id')->unsigned();
            $table->bigInteger('participant_user_id')->unsigned();

            $table->foreign('participant_user_id')
                  ->references('id')->on(Models::table('users'))
                  ->onUpdate('no action')->onDelete('no action');

            //TODO: add this constraint, alt_questions need to be moved up in the migrations
            // $table->foreign('question_id')
            //       ->references('id')->on(Models::table('alt_questions'))
            //       ->onUpdate('no action')->onDelete('no action');
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
