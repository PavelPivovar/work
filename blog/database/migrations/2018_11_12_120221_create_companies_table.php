<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('company');
            $table->string('user_id')->nullable();
            $table->string('profession_id')->nullable();
            $table->string('rubric_id')->nullable();
            $table->string('city_id')->nullable();
            $table->string('views')->default(0);
            $table->string('position');
            $table->string('site');
            $table->string('number');
            $table->string('email');
            $table->string('password');
            $table->string('status')->default(0);
            $table->string('date')->nullable();
            $table->string('image')->default(0);
            $table->integer('is_featured')->default(0);
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
        Schema::dropIfExists('companies');
    }
}
