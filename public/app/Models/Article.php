<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\{BelongsToMany, HasMany};

class Article extends Model
{
    use HasFactory;

    public const PREVIEW_TEXT_LENGTH = 100;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'slug',
        'description',
        'preview_url',
        'image_url',
    ];

    /**
     * The number of models to return for pagination.
     *
     * @var int
     */
    protected $perPage = 10;

    /**
     * Get article's tags
     *
     * @return BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Get article's comments
     *
     * @return HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * @return string
     */
    public function getPreviewText(): string
    {
        return substr($this->description, 0, self::PREVIEW_TEXT_LENGTH) . '...';
    }

    /**
     * @return int
     */
    public function getViewCount(): int
    {
        return 100;
    }

    /**
     * @return int
     */
    public function getLikesCount(): int
    {
        return 500;
    }

}
