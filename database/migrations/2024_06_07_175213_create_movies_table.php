<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('synopsis');
            $table->integer('durationMinutes');
            $table->date('releaseDate');
            $table->string('posterUrl');
            $table->string('trailerUrl');
            $table->timestamps();

            // Chave estrangeira id usuario
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            // // Chave estrangeira id genero
            $table->unsignedBigInteger('id_genre');
            $table->foreign('id_genre')->references('id')->on('genres')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
