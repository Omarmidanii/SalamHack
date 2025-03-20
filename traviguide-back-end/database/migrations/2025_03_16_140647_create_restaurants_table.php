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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('location')->nullable();
            $table->text('address')->nullable();
            $table->text('description')->nullable();
            $table->string('price_range')->nullable();
            $table->string('food_types')->nullable();
            $table->string('character')->nullable();
            $table->decimal('rating', 3, 2)->nullable();
            $table->string('open_time')->nullable();
            $table->string('close_time')->nullable();
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
        Schema::dropIfExists('restaurants');
    }
};
