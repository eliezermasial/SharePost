<?php

namespace App\Models;

use Conner\Tagging\Taggable;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    use HasSlug;
    use SoftDeletes;
    use taggable;

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

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom(fieldName:'title')->saveSlugsTo(fieldName:'slug');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function imageUrl(): string
    {
        return storage::url($this->image);
    }

    public function scopeByAuthor($query, $authorId = null)
    {
        return  $query->where('author_id', $authorId ?? Auth::id());
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
