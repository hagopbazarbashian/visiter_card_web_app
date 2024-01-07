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
        Schema::create('socelmedia', function (Blueprint $table) {
            $table->id();
            $table->integer('cardform_id');
            $table->string('facebook')->nullable();
            $table->string('facebookprofilename')->nullable();
            $table->string('facebook2')->nullable();
            $table->string('facebookprofilename2')->nullable();
            $table->string('facebook3')->nullable();
            $table->string('facebookprofilename3')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('instagram2')->nullable();
            $table->string('instagram3')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('youtube')->nullable();

            $table->string('tiktok')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('snapchat')->nullable();
            $table->string('telegram')->nullable();
            $table->string('discord')->nullable();
            $table->string('skype')->nullable();
            $table->string('paypal')->nullable();

            $table->string('spotify')->nullable();
            $table->string('applemusic')->nullable();
            $table->string('soundcloud')->nullable();

            $table->string('behance')->nullable();
            $table->string('twitch')->nullable();
            $table->string('link')->nullable();
            $table->string('website')->nullable();
            $table->string('address')->nullable();
            $table->string('doc')->nullable();
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
        Schema::dropIfExists('socelmedia');
    }
};
