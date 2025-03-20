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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('location')->nullable();
            $table->text('description')->nullable();
            $table->string('address')->nullable();
            $table->enum('price_range', ['low', 'medium', 'high'])->nullable();
            $table->string('rating')->nullable();
            $table->string('has_activity')->default(false);
            $table->string('room_sizes')->nullable();
            $table->string('available_times')->nullable();
            $table->string('contacts')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
