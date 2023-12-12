<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    use HasFactory;
    public $primaryKey = 'hewan_id';
    protected $fillable = [
        'category_id', 'code', 'name', 'description'
    ];
    public function category()
    {
       return $this->belongTo(Category::class, 'category_id');
    }
}
