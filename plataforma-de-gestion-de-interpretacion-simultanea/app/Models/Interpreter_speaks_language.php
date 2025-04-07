<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Interpreter;
use App\Models\language;
use App\Models\Level;

class interpreter_speaks_language extends Model
{
    use HasFactory;

    public $table = 'interpreter_speaks_language';

    public function interpreter()
    {
        return $this->belongsTo(Interpreter::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
