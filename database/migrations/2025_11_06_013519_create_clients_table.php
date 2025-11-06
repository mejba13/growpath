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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prospect_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('company_name')->index();
            $table->string('industry')->nullable();
            $table->enum('company_size', ['1-10', '11-50', '51-200', '201-500', '501-1000', '1001+'])->nullable();
            $table->date('contract_start_date')->nullable();
            $table->date('contract_end_date')->nullable();
            $table->decimal('contract_value', 15, 2)->nullable();
            $table->enum('payment_status', ['current', 'overdue', 'cancelled'])->default('current');
            $table->integer('account_health_score')->nullable();
            $table->date('renewal_date')->nullable();
            $table->json('services_purchased')->nullable();
            $table->text('notes')->nullable();
            $table->timestamp('converted_at')->nullable();
            $table->timestamps();

            // Indexes
            $table->index('renewal_date');
            $table->index('contract_end_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
