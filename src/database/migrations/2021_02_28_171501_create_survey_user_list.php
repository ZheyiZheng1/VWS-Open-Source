<?php

use Silber\Bouncer\Database\Models;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyUserList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_user_lists', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('isCompleted')->default(false);

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
                  ->references('id')->on(Models::table('users'))
                  ->onUpdate('no action')->onDelete('no action');

            $table->bigInteger('survey_id')->unsigned()->index();
            $table->foreign('survey_id')
                  ->references('id')->on(Models::table('survey_lists'))
                  ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_user_lists');
    }
}
