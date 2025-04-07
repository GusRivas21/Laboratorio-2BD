<?php

use Illuminate\Database\Eloquent\Factories\HasFactory;
namespace App\Models;
use AApp\Models\Equipment;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function equipment()
    {
        return $this->hasMany(Equipment::class);
    }
}
