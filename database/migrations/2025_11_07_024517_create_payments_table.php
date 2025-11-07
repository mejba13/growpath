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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id')->unique();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->foreignId('subscription_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('company_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('payment_gateway', ['stripe', 'paypal', 'manual'])->default('stripe');
            $table->string('gateway_transaction_id')->nullable(); // External payment ID
            $table->string('gateway_payment_intent')->nullable();
            $table->enum('status', ['pending', 'processing', 'succeeded', 'failed', 'refunded', 'cancelled'])->default('pending');
            $table->decimal('amount', 10, 2);
            $table->string('currency')->default('usd');
            $table->string('payment_method_type')->nullable(); // card, bank_transfer, etc.
            $table->string('card_last4')->nullable();
            $table->string('card_brand')->nullable();
            $table->json('gateway_response')->nullable(); // Full response from payment gateway
            $table->text('failure_reason')->nullable();
            $table->timestamp('processed_at')->nullable();
            $table->timestamps();

            $table->index('transaction_id');
            $table->index('order_id');
            $table->index('company_id');
            $table->index('status');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
