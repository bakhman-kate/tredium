<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'label',
        'url',
    ];

    /**
     * Get tag's articles
     *
     * @return BelongsToMany
     */
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

}
