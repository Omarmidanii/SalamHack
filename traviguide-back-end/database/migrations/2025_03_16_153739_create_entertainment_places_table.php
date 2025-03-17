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
        Schema::create('entertainment_places', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('location')->nullable();
            $table->text('address')->nullable();
            $table->enum('price_range', ['low', 'medium', 'high'])->nullable();
            $table->decimal('rating', 3, 2)->nullable();
            $table->string('type_of_activity')->nullable();
            $table->time('open_time')->nullable();
            $table->time('close_time')->nullable();
            $table->json('contacts')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entertainment_places');
    }
};
