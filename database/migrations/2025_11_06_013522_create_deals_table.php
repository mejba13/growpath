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
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prospect_id')->constrained()->onDelete('cascade');
            $table->foreignId('pipeline_stage_id')->constrained()->onDelete('cascade');
            $table->decimal('estimated_value', 15, 2)->nullable();
            $table->date('expected_close_date')->nullable();
            $table->integer('probability')->default(0);
            $table->timestamps();

            // Indexes
            $table->index('expected_close_date');
            $table->index(['pipeline_stage_id', 'expected_close_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deals');
    }
};
