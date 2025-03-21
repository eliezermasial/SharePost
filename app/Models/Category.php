<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    use HasSlug;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'isActive',
        'description',
    ];

    public function Articles(): hasMany
    {
        return $this->hasMany(Article::class);
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom(fieldName:'name')->saveSlugsTo(fieldName:'slug');
    }

    public function getRouteKeyName() : string
    {
        return 'slug';
    }

    public function scopeActive($query)
    {
        return $query->where('isActive', 1);
    }
}
