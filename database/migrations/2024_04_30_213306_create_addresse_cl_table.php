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
        Schema::create('addresse_cl', function (Blueprint $table) {
            $table->id();
            $table->string('libaddr');
            $table->string('typeaddr');
            $table->string('telephone')->nullable();
            $table->string('pays');
            $table->string('addr1');
            $table->string('addr2')->nullable();
            $table->string('codepos')->nullable();
            $table->string('ville');
            $table->string('client_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresse_cl');
    }
};