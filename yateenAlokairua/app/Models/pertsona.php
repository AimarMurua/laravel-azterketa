<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pertsona extends Model
{
    use HasFactory;
    protected $fillable = ['p_izena'];

    public function pertsonas() {
        return $this->hasMany(Alkilerra::class);
    }
}
