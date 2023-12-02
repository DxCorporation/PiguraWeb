<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FormulaDetail extends Model
{
    use HasFactory;
    protected $fillable = ['formula_id', 'bahan_id', 'qty'];

    /**
     * Get the bahan that owns the FormulaDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bahan(): BelongsTo
    {
        return $this->belongsTo(Bahan::class, 'bahan_id', 'id');
    }
}
