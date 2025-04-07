<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;
use App\Models\Customer;

class Venue extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
    ];

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
