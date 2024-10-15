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
        Schema::create('crop_cycles', function (Blueprint $table) {
            $table->id(); // Asosiy kalit
            $table->unsignedBigInteger('field_id'); // Foreign key
            $table->unsignedBigInteger('crop_id');  // Foreign key
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->enum('status', ['planned', 'active', 'completed']);
            $table->decimal('yield', 10, 2)->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('field_id')->references('id')->on('fields')->onDelete('cascade');
            $table->foreign('crop_id')->references('id')->on('crops')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crop_cycles');
    }
};
