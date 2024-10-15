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
        Schema::create('resource_usage', function (Blueprint $table) {
            $table->id(); // Asosiy kalit
            $table->unsignedBigInteger('crop_cycle_id'); // Foreign key
            $table->unsignedBigInteger('resource_id'); // Foreign key
            $table->decimal('quantity', 10, 2);
            $table->date('date');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('crop_cycle_id')->references('id')->on('crop_cycles')->onDelete('cascade');
            $table->foreign('resource_id')->references('id')->on('resources')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resource_usage');
    }
};
