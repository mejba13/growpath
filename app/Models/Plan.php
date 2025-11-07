<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plan extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'yearly_price',
        'billing_interval',
        'max_prospects',
        'max_team_members',
        'features',
        'is_popular',
        'is_active',
        'trial_days',
        'stripe_price_id',
        'stripe_product_id',
        'sort_order',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'yearly_price' => 'decimal:2',
        'features' => 'array',
        'is_popular' => 'boolean',
        'is_active' => 'boolean',
        'max_prospects' => 'integer',
        'max_team_members' => 'integer',
        'trial_days' => 'integer',
        'sort_order' => 'integer',
    ];

    /**
     * Get all subscriptions for this plan.
     */
    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }

    /**
     * Get all orders for this plan.
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    /**
     * Scope to get only active plans.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope to order by sort order.
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }

    /**
     * Get formatted price.
     */
    public function getFormattedPriceAttribute(): string
    {
        return '$' . number_format($this->price, 2);
    }

    /**
     * Check if plan has unlimited prospects.
     */
    public function hasUnlimitedProspects(): bool
    {
        return is_null($this->max_prospects);
    }

    /**
     * Check if plan has unlimited team members.
     */
    public function hasUnlimitedTeamMembers(): bool
    {
        return is_null($this->max_team_members);
    }
}
