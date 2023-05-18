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
        Schema::create('employes_produits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employe_id')->contrained('employes');
            $table->foreignId('produit_id')->contrained('produits');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes_produits');
    }
};
