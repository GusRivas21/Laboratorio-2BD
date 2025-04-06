<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Material;
use App\Models\Supplier;

class Batches extends Model
{
    /** @use HasFactory<\Database\Factories\BatchesFactory> */
    use HasFactory;

    protected $fillable = [
        'acquisitionDate',
        'quantity',
        'supplier_id',
        'material_id'
    ];

    public function materials()
    {
        return $this->hasOne(Material::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
