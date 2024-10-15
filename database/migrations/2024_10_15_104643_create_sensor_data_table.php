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
        Schema::create('sensor_data', function (Blueprint $table) {
            $table->id(); // Asosiy kalit
            $table->unsignedBigInteger('field_id'); // Foreign key
            $table->enum('sensor_type', ['temperature', 'humidity', 'soil_moisture']);
            $table->decimal('value', 5, 2);
            $table->timestamp('timestamp');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('field_id')->references('id')->on('fields')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensor_data');
    }
};
