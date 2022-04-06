<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'body',
    ];

    /**
     * Get comment's article
     *
     * @return BelongsTo
     */
    public function article()
    {
        return $this->belongsTo(Article::class);
    }

}
