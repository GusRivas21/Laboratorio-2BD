<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evaluation;
use App\Models\Venue;

class Customer extends Model
{
    use HasFactory;

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }

    public function venues()
    {
        return $this->hasMany(Venue::class);
    }
}
