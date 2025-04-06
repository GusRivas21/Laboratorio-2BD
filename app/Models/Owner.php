<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Adress;
use App\Models\ArtPiece;

class Owner extends Model
{
    /** @use HasFactory<\Database\Factories\OwnerFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'lastName',
        'phoneNumber',
        'adress_id'
    ];

    public function artPieces()
    {
    return $this->belongsToMany(ArtPiece::class, 'art_pieces_owners');
    }

    public function adress()
    {
        return $this->hasOne(Adress::class);
    }

}
