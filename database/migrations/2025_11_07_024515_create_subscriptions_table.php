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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('plan_id')->constrained()->onDelete('restrict');
            $table->string('stripe_subscription_id')->nullable()->unique();
            $table->string('stripe_customer_id')->nullable();
            $table->enum('status', ['trial', 'active', 'cancelled', 'expired', 'past_due', 'incomplete'])->default('trial');
            $table->date('trial_ends_at')->nullable();
            $table->date('current_period_start')->nullable();
            $table->date('current_period_end')->nullable();
            $table->date('ends_at')->nullable(); // When user cancels
            $table->date('cancelled_at')->nullable();
            $table->decimal('amount', 10, 2);
            $table->string('currency')->default('usd');
            $table->enum('billing_interval', ['monthly', 'yearly'])->default('monthly');
            $table->boolean('auto_renew')->default(true);
            $table->timestamp('last_payment_at')->nullable();
            $table->timestamp('next_payment_at')->nullable();
            $table->integer('failed_payment_count')->default(0);
            $table->timestamps();

            $table->index('company_id');
            $table->index('user_id');
            $table->index('status');
            $table->index('current_period_end');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
