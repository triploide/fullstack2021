<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TagsAndGenres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('value', 120);
            $table->timestamps();
        });

        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('value', 120);
            $table->timestamps();
        });

        // nombre de una de las tablas en singular, guión de abajo, nombre la otra tabla en singular
        // los nombres de las tablas en orden alfabético
        Schema::create('movie_tag', function (Blueprint $table) {
            $table->id();
            $table->integer('movie_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->timestamps();

            $table->index(['movie_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
