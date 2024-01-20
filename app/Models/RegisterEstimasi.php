<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterEstimasi extends Model
{
    use HasFactory;
    protected $fillable = ['ip', 'name', 'umur', 'alamat', 'date', 'hits'];
}
