<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Deal extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'prospect_id',
        'pipeline_stage_id',
        'estimated_value',
        'expected_close_date',
        'probability',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'estimated_value' => 'decimal:2',
            'expected_close_date' => 'date',
            'probability' => 'integer',
        ];
    }

    /**
     * Get the prospect that owns the deal.
     */
    public function prospect(): BelongsTo
    {
        return $this->belongsTo(Prospect::class);
    }

    /**
     * Get the pipeline stage for the deal.
     */
    public function pipelineStage(): BelongsTo
    {
        return $this->belongsTo(PipelineStage::class);
    }

    /**
     * Get the weighted value of the deal.
     */
    public function getWeightedValueAttribute(): float
    {
        return ($this->estimated_value ?? 0) * ($this->probability / 100);
    }
}
