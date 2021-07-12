<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'url_image',
        'category_id'
    ];

    /**
     * Get the category that owns the food
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
