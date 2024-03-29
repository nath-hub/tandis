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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('photo')->nullable();
            $table->enum('statut', ['ACTIF', 'INACTIF'])->default('ACTIF');
            $table->string('phone')->nullable()->unique();
            $table->string('town')->nullable();
            $table->string('code')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('country')->nullable();
            $table->enum('type', ['ENTERPRISE','ADMIN','INVEST'])->default('INVEST');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
