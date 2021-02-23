<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'logo',
        'image'
    ];

    public function categories()
    {
        return $this->hasMany(Category::class, 'category_id');
    }

    public function subCategories()
    {
        return $this->hasMany(Category::class, 'id')->with('categories');
    }
}
