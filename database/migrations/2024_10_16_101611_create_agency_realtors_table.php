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
        Schema::create('agency_realtors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agency_id'); 
            $table->unsignedBigInteger('realtor_id');
            
            $table->timestamps();
            
            // Foreign keys with cascading deletes
            $table->foreign('agency_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('realtor_id')->references('id')->on('users')->onDelete('cascade');
        
            // Ensure uniqueness of the realtor-agency pair
            $table->unique(['agency_id', 'realtor_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agency_realtors');
    }
};
