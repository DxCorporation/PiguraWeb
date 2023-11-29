<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormulaDetail extends Model
{
    use HasFactory;
    protected $fillable = ['formula_id', 'bahan_id', 'qty'];
}
