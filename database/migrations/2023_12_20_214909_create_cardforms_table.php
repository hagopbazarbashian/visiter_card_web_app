<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardforms', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('photo');
            $table->string('full_name');
            $table->string('title');
            $table->string('department');
            $table->string('company');
            $table->string('headline');
            $table->string('email');
            $table->string('phone');
            $table->string('fb');
            $table->string('ins');
            $table->string('link');
            $table->string('color');
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
        Schema::dropIfExists('cardforms');
    }
};
