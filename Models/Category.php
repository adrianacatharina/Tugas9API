<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'hewan_id', 'code', 'name', 'description'
    ];

    public function hewans()
    {
        return $this->hasMany(Hewan::class, 'hewan_id');
    }
}
