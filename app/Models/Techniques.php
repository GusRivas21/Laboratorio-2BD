<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Techniques extends Model
{
    /** @use HasFactory<\Database\Factories\TechniquesFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function restorations()
    {
        return $this->belongsToMany(Restoration::class, 'technique_restoration');
    }
    public function materials()
    {
        return $this->belongsToMany(Restoration::class, 'technique_material');
    }
}
