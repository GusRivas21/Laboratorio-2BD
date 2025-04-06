<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Batches;

class Material extends Model
{
    /** @use HasFactory<\Database\Factories\MaterialFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];
    public function batch()
    {
        return $this->hasMany(Batches::class);
    }
    public function technique()
    {
        return $this->belongsToMany(Techniques::class,'technique_material');
    }
    

}
