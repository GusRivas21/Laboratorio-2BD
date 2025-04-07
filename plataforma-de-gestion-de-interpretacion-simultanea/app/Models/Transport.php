<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Logistics;

class Transport extends Model
{
    use HasFactory;

    public function logistics()
    {
        return $this->hasMany(Logistics::class);
    }
}
