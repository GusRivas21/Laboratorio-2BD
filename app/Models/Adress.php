<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Owner;
use App\Models\Supplier;
use App\Models\Responsible;

class Adress extends Model
{
    /** @use HasFactory<\Database\Factories\AdressFactory> */
    use HasFactory;

    protected $fillable = [
        'homeNumber',
        'street',
        'neighborhood',
        'city',
        'region',
        'country'
    ];
    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function responsible()
    {
        return $this->belongsTo(Responsible::class);
    }
}
