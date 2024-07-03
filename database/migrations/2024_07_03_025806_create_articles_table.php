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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('thumbnail')->nullable();
            $table->string('title'); //'Apa yang Terbaru di Laravel 11'
            $table->string('slug')->unique(); //'apa-yang-terbaru-di-laravel-11' (membuat url lebih bagus)
            $table->text('teaser'); //untuk deskripsi singkat sebelum user membaca lebih dalam
            $table->text('body'); //content dari artikel tersebut
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
