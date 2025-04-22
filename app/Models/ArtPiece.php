<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Owner;

class ArtPiece extends Model
{
    /** @use HasFactory<\Database\Factories\ArtPieceFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'creationDate',
        'dimensions',
        'material'
    ];
    public function owners()
    {
        return $this->belongsToMany(Owner::class, 'art_pieces_owners');
    }

    public function interventions()
    {
        return $this->hasMany(Intervention::class);
    }
}
