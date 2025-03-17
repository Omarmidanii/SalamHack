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
            $table->string('name');
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->text('address');
            $table->enum('price_range', ['low', 'medium', 'high']);
            $table->decimal('rating', 3, 2)->nullable();
            $table->string('type_of_activity');
            $table->time('open_time');
            $table->time('close_time');
            $table->json('contacts');
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