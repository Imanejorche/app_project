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
        Schema::create('information_cl', function (Blueprint $table) {
            $table->id();
            $table->string('lieustock');
            $table->string('nivprix');
            $table->string('devise');
            $table->string('remise')->nullable();
            $table->string('montantcom')->nullable();
            $table->string('typetaxe');
            $table->string('taxe');
            $table->string('jours');
            $table->string('delais');
            $table->string('langues');
            $table->string('client_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information_cl');
    }
};
