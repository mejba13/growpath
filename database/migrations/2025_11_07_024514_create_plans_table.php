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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Starter, Professional, Enterprise
            $table->string('slug')->unique(); // starter, professional, enterprise
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2); // Monthly price
            $table->decimal('yearly_price', 10, 2)->nullable(); // Optional yearly price
            $table->enum('billing_interval', ['monthly', 'yearly'])->default('monthly');
            $table->integer('max_prospects')->nullable(); // null = unlimited
            $table->integer('max_team_members')->nullable(); // null = unlimited
            $table->json('features')->nullable(); // Array of feature names
            $table->boolean('is_popular')->default(false);
            $table->boolean('is_active')->default(true);
            $table->integer('trial_days')->default(14);
            $table->string('stripe_price_id')->nullable(); // Stripe Price ID
            $table->string('stripe_product_id')->nullable(); // Stripe Product ID
            $table->integer('sort_order')->default(0);
            $table->timestamps();

            $table->index('slug');
            $table->index('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
