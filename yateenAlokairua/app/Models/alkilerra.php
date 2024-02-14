<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alkilerra extends Model
{
    use HasFactory;
    protected $fillable = ['pertsona_id', 'yatea_id',];

    public function pertsona() {
        return $this->belongsTo(Pertsona::class);
    }

    public function yatea() {
        return $this->belongsTo(Yatea::class);
    }
}
