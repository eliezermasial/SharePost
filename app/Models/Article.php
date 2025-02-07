<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    use HasSlug;
    use SoftDeletes;

    protected $fillable = [
        'slug',
        'title',
        'image',
        'content',
        'isActive',
        'isComment',
        'author_id',
        'isSharable',
        'category_id',
    ];
    /*
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }*/

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom(fieldName:'title')->saveSlugsTo(fieldName:'slug');
    }

    public function getRouteKeyName() : string
    {
        return 'slug';
    }
}
