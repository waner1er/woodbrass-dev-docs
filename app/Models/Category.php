<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'thumbnail',
    ];

    public function docs(): HasMany
    {
        return $this->hasMany(Doc::class)->orderBy('slug');
    }
}
