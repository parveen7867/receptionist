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
        Schema::create('patientbeds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Patient_id');
            $table->foreign('Patient_id')->references('id')->on('Patients');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patientbeds');
    }
};
