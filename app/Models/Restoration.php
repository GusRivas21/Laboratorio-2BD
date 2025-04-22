<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ArtPiece;
use App\Models\Revision;
use App\Models\Analysis;

class Restoration extends Model
{
    /** @use HasFactory<\Database\Factories\RestorationFactory> */
    use HasFactory;

    protected $fillable = [
        'startDate',
        'endDate',
        'reason',
        'notes',
        'art_piece_id'
    ];
    public function artPiece()
    {
        return $this->belongsTo(ArtPiece::class);
    }
    public function revision()
    {
    return $this->hasMany(Revision::class);
    }

    public function analysis()
    {
    return $this->hasMany(Analysis::class);
    }

    public function responsibles()
    {
        return $this->belongsToMany(Responsible::class);
    }

    public function technique()
    {
        return $this->belongsToMany(Techniques::class, 'technique_restoration');
    }

}
