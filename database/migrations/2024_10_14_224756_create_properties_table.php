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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->longText('images');
            $table->longText('videos');
            $table->string('name');
            $table->string('type');
            $table->string('bedroom')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('squarefoot')->nullable();
            $table->longText('description');
            $table->string('transaction_info');
            $table->string('payment_mode');
            $table->longText('features');
            $table->string('location');
            $table->string('country');
            $table->boolean('status')->default(0);
            $table->double('amount');
            $table->timestamp('date_listed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
