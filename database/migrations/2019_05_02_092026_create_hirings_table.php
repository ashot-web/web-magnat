<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHiringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hirings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_hy')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('position_hy')->nullable();
            $table->string('position_en')->nullable();
            $table->string('position_ru')->nullable();
            $table->longText('about_hy')->nullable();
            $table->longText('about_en')->nullable();
            $table->longText('about_ru')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('hirings');
    }
}
