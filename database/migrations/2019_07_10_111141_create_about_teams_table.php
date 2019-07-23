<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_teams', function (Blueprint $table) {

                $table->bigIncrements('id');
                $table->string('worker_id')->nullable();
                $table->longText('about_hy')->nullable();
                $table->longText('about_en')->nullable();
                $table->longText('about_ru')->nullable();
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
        Schema::dropIfExists('about_teams');
    }
}
