<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class yatea extends Model
{
    use HasFactory;

    protected $fillable = ['y_izena', 'y_urtea', 'y_bidaiariak'];

    public function alkilerras() {
        return $this->hasMany(Alkilerra::class);
    }
}
