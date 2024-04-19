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
        Schema::create('adddocuments', function (Blueprint $table) {
            $table->id();
            $table->Integer('patientid');
            $table->String('file');
             $table->unSignedBigInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('doctors'); 
            $table->String('documenttitle');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adddocuments');
    }
};
