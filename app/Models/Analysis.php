<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restoration;

class Analysis extends Model
{
    /** @use HasFactory<\Database\Factories\AnalysisFactory> */
    use HasFactory;

    protected $fillable = [
        'type',
        'date',
        'notes',
        'restoration_id'
        
    ];
    public function restoration()
    {
        return $this->belongsTo(Restoration::class);
    }
}
