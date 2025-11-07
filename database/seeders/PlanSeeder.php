<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('🎯 Seeding pricing plans...');

        // Starter Plan
        Plan::create([
            'name' => 'Starter',
            'slug' => 'starter',
            'description' => 'Perfect for small teams getting started',
            'price' => 29.00,
            'yearly_price' => 290.00, // ~17% discount
            'billing_interval' => 'monthly',
            'max_prospects' => 500,
            'max_team_members' => 3,
            'features' => [
                '500 prospects',
                '3 team members',
                'Basic reporting',
                'Email support',
            ],
            'is_popular' => false,
            'is_active' => true,
            'trial_days' => 14,
            'sort_order' => 1,
        ]);

        // Professional Plan (Most Popular)
        Plan::create([
            'name' => 'Professional',
            'slug' => 'professional',
            'description' => 'For growing businesses',
            'price' => 79.00,
            'yearly_price' => 790.00, // ~17% discount
            'billing_interval' => 'monthly',
            'max_prospects' => 2000,
            'max_team_members' => 10,
            'features' => [
                '2,000 prospects',
                '10 team members',
                'Advanced reporting',
                'API access',
                'Priority support',
            ],
            'is_popular' => true,
            'is_active' => true,
            'trial_days' => 14,
            'sort_order' => 2,
        ]);

        // Enterprise Plan
        Plan::create([
            'name' => 'Enterprise',
            'slug' => 'enterprise',
            'description' => 'For large organizations',
            'price' => 199.00,
            'yearly_price' => 1990.00, // ~17% discount
            'billing_interval' => 'monthly',
            'max_prospects' => null, // Unlimited
            'max_team_members' => null, // Unlimited
            'features' => [
                'Unlimited prospects',
                'Unlimited team members',
                'Custom integrations',
                'Dedicated support',
                'Custom training',
            ],
            'is_popular' => false,
            'is_active' => true,
            'trial_days' => 14,
            'sort_order' => 3,
        ]);

        $this->command->info('  ✓ Created 3 pricing plans');
    }
}
