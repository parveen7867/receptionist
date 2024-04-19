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
        Schema::create('accountmanagers', function (Blueprint $table) {
            $table->id();
            $table->string('vocherno');
            $table->string('creaditaccounthead');
            $table->Integer('date');
            $table->string('remark');
            $table->string('accountname');
            $table->string('code');
            $table->Integer('amount');
            $table->Integer('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accountmanagers');
    }
};
