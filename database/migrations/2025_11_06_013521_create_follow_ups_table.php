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
        Schema::create('follow_ups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prospect_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('type', ['call', 'email', 'meeting', 'demo', 'proposal', 'other'])->default('call');
            $table->string('subject');
            $table->text('description')->nullable();
            $table->date('due_date')->index();
            $table->time('due_time')->nullable();
            $table->enum('priority', ['low', 'medium', 'high'])->default('medium');
            $table->enum('status', ['pending', 'completed', 'cancelled'])->default('pending')->index();
            $table->timestamp('completed_at')->nullable();
            $table->text('outcome_notes')->nullable();
            $table->boolean('reminder_sent')->default(false);
            $table->timestamps();

            // Indexes
            $table->index(['due_date', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('follow_ups');
    }
};
