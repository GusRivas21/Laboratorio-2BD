<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;
use App\Models\Type;

class Equipment extends Model
{
    use HasFactory;

    protected $table = 'Equipment';

    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_equipment');
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
