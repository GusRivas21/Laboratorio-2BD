<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    /** @use HasFactory<\Database\Factories\InterventionFactory> */
    use HasFactory;

    use HasFactory;
    protected $fillable = [
        'date',
        'filePath',
        'notes',
        'art_pieces_id'
    ];

    public function artPiece()
    {
        return $this->belongsTo(ArtPiece::class);
    }
}

