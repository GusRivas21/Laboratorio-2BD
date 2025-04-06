<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsible extends Model
{
    /** @use HasFactory<\Database\Factories\ResponsibleFactory> */
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'phoneNumber',
        'certification',
        'adress_id'
    ];

    public function address()
    {
        return $this->hasOne(Adress::class);
    }

    public function artPieces()
    {
    return $this->belongsToMany(ArtPiece::class);
    }

    public function restorations()
    {
        return $this->hasMany(Restoration::class);
    }

    public function restoration()
    {
        return $this->belongsToMany(Restoration::class);
    }
}
