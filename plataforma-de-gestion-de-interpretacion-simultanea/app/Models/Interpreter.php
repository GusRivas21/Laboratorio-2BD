<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Language;
use App\Models\Event;
use App\Models\Evaluation;
use App\Models\Logistics;

class Interpreter extends Model
{
    use HasFactory;

    public function languages()
    {
        return $this->belongsToMany(Language::class, 'interpreter_speaks_language')
                    ->withPivot('level_id');
    }

    public function events()
    {
        return $this->belongsToMany(Event::class, 'interpreter_assigned_event');
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
