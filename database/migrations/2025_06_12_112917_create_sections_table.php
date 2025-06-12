<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique(); // e.g. 'home', 'galery', 'cara-pemesanan'
            $table->string('title');
            $table->longText('content')->nullable(); // For paragraphs or descriptions
            $table->json('images')->nullable(); // For storing multiple image paths
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
