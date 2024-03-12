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
        Schema::create('enterprises', function (Blueprint $table) {
            $table->id();
            $table->string('siren')->nullable();
            $table->string('commercial_register');
            $table->string('name_enterprise');
            $table->string('address');
            $table->string('objectif');
            $table->integer('montant_actuel');
            $table->string('web_site')->nullable();
            $table->string('description')->nullable();
            $table->enum('state', ['ACTIF', 'INACTIF']);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enterprises');
    }
};
