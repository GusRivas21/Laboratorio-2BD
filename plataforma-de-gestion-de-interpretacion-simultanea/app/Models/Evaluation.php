<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Interpreter;
use App\Models\Event;
use App\Models\Customer;
use App\Models\Evaluator;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = ['score', 'comments', 'interpreter_id', 'event_id', 'client_id'];

    public function interpreter()
    {
        return $this->belongsTo(Interpreter::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function evaluator()
    {
        return $this->hasOne(Evaluator::class);
    }
}
