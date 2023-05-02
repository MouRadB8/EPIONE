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
        Schema::create('produits', function (Blueprint $table) {
            $table->increments("id");
            $table->string("reference");
            $table->string("name");
            $table->double("price",30,2);
            $table->string("img1");
            $table->string("img2");
            $table->string("img3");
            $table->string("description");
            $table->integer("quantiteDisponible");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
