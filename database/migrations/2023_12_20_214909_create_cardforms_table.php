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
            $table->string('photo')->nullable();
            $table->string('full_name');
            $table->string('title')->nullable();
            $table->string('department')->nullable();
            $table->string('company')->nullable();
            $table->string('headline')->nullable();
            $table->string('date')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('color')->nullable();
            $table->string('color_code')->nullable();
            $table->string('status')->default('1');
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
