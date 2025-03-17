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
            $table->string('location')->nullable();
            $table->text('address')->nullable();
            $table->enum('price_range', ['low', 'medium', 'high'])->nullable();
            $table->decimal('rating', 3, 2)->nullable();
            $table->boolean('has_activity')->default(false);
            $table->json('room_sizes')->nullable();
            $table->json('available_times')->nullable();
            $table->json('contacts')->nullable();
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
