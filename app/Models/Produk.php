<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['produk', 'category_id', 'harga', 'image', 'spesial'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
