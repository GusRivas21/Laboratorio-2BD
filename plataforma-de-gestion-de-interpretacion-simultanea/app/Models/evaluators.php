<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evaluation;

class Evaluators extends Model
{
    use HasFactory;

    protected $table = 'Evaluators';

    public function evaluation()
    {
        return $this->belongsTo(Evaluation::class);
    }
}
