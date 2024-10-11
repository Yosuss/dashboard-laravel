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
        //
        Schema::create('data_pesanan', function (Blueprint $table) {
            $table->id('id_pesanan'); // Kolom ID pesanan
            $table->date('tanggal_pesanan'); // Kolom tanggal pesanan
            $table->integer('total_pesanan');
            $table->integer('harga'); 
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('data_pesanan');
    }
};