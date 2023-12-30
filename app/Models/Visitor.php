<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Visitor extends Model
{
    use HasFactory;
    protected $fillable = ['ip', 'date', 'hits', 'online', 'time'];

    public function cekIp($ip, $date)
    {
        return DB::table('visitors')
            ->where('ip', $ip)
            ->where('date', $date)
            ->get();
    }
}
