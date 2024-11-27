<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'content', 'category_id', 'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
