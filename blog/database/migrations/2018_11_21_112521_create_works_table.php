<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('phone')->nullable();
            $table->string('avatar')->nullable();
            $table->string('city_id')->nullable();
            $table->string('rubric_id')->nullable();
            $table->string('profession_id')->nullable();
            $table->string('user_id')->nullable();
            $table->string('date_birthday')->nullable();
            $table->string('previous_company')->nullable();
            $table->string('position')->nullable();
            $table->string('data_work_start')->nullable();
            $table->string('data_work_end')->nullable();
            $table->string('schooling')->nullable();
            $table->string('year_of_study')->nullable();
            $table->string('faculty')->nullable();
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
        Schema::dropIfExists('works');
    }
}
