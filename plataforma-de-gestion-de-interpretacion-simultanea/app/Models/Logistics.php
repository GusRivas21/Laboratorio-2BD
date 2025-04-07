<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Interpreter;
use App\Models\Transport;
use App\Models\Venue;

class Logistics extends Model
{
    use HasFactory;


    public function transport()
    {
        return $this->belongsTo(Transport::class);
    }

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }

    public function interpreter()
    {
        return $this->belongsTo(Interpreter::class);
    }
}


