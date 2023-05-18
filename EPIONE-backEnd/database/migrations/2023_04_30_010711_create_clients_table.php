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
        Schema::create('clients', function (Blueprint $table) {
            $table->increments("id");
            $table->string("CIN");
            $table->string("lastName");
            $table->string("firstName");
            $table->date("dateNaissance");
            $table->string("adresse");
            $table->string("phone");
            $table->string("username");
            $table->string("email");
            $table->string("password");
            $table->string("img");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
