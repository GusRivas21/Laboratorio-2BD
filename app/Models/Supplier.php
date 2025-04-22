<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Batches;
class Supplier extends Model
{
    /** @use HasFactory<\Database\Factories\SupplierFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'lastName',
        'phoneNumber',
        'brand',
        'adress_id'
    ];
    public function adress()
    {
        return $this->hasOne(Adress::class);
    }

    public function batches()
    {
        return $this->hasMany(Batches::class);
    }


}
