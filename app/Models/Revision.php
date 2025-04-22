<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restoration;

class Revision extends Model
{
    /** @use HasFactory<\Database\Factories\RevisionFactory> */
    use HasFactory;
    
    protected $fillable = [
        'date',
        'notes'
    ];
    public function restoration()
    {
        return $this->belongsTo(Restoration::class);
    }
}
