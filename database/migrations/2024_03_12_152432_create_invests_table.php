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
        Schema::create('invests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('enterprise_id');
 
            $table->integer('prix_action')->nullable();
            $table->integer('nombre_action')->nullable(); 
            $table->string('feedback')->nullable();
            $table->integer("etoile")->nullable(); 
            $table->integer("total_payer")->nullable();

            $table->index(["enterprise_id"], "fk_enterprise_user");
            $table->index(["user_id"], "fk_user_enterprise");

            $table->foreign('enterprise_id')->references('id')->on('enterprises');
            $table->foreign('user_id')->references('id')->on('users');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invests');
    }
};
