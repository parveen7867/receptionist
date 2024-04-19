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
        Schema::create('doctors', function (Blueprint $table) {
       
            $table->id();
            $table->string('Picture',1000);
            $table->string('FirstName')->nullable();
            $table->string('LastName');
            $table->string('Department');
            $table->string('EmailAddress');
            $table->string('Password');
            $table->string('Sex');
            $table->string('Bloodgroup');
             $table->string('DateofBirth');
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
