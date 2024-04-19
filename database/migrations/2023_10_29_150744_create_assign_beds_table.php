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
        Schema::create('assign_beds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Patient_id');
            $table->foreign('Patient_id')->references('id')->on('Patients');  
            $table->unsignedBigInteger('floor_id');
            $table->foreign('floor_id')->references('id')->on('floors');  
            $table->unsignedBigInteger('block_id');
            $table->foreign('block_id')->references('id')->on('blocks');  
            $table->unsignedBigInteger('bedds_id');
            $table->foreign('bedds_id')->references('id')->on('bedds');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assign_beds');
    }
};
