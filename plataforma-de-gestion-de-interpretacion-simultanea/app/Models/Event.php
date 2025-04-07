<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Interpreter;
use App\Models\Equipment;
use App\Models\Venue;
use App\Models\Evaluation;
use App\Models\Logistics;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'event_name',
        'date',
        'theme',
        'capacity',
        'venue_id'
    ];

    public function interpreters()
    {
        return $this->belongsToMany(Interpreter::class, 'interpreter_assigned_event');
    }

    public function equipment()
    {
        return $this->belongsToMany(Equipment::class, 'event_equipment');
    }

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }

    public function logistics()
    {
        return $this->hasMany(Logistics::class);
    }
}
