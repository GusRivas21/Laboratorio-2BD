<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Interpreter;

class Language extends Model
{
    use HasFactory;

    public function interpreters()
    {
        return $this->belongsToMany(Interpreter::class, 'interpreter_speaks_language')
                    ->withPivot('level_id');
    }
}
