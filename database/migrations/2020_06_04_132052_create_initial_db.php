<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInitialDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('artist_id');
            $table->string('artwork')->nullable();
            $table->string('genre');
            $table->timestamps();

            $table->foreign('artist_id')->references('id')->on('artists');
        });

        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('album_id');
            $table->unsignedTinyInteger('track_number');
            $table->time('duration');
            $table->string('file');
            $table->string('original_file');
            $table->timestamps();

            $table->unique(['album_id','track_number']);
            $table->foreign('album_id')->references('id')->on('albums');
        });

        Schema::create('user_albums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('album_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('album_id')->references('id')->on('albums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_albums');
        Schema::dropIfExists('songs');
        Schema::dropIfExists('albums');
        Schema::dropIfExists('artists');
    }
}
