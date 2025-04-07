<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Interpreter;

class Level extends Model
{
    use HasFactory;

    public function interpreterSpeaks()
    {
        return $this->hasMany(Interpreter_speaks_language::class);
    }
}
