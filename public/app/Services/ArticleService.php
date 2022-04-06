<?php

namespace App\Services;

use App\Models\Article;

class ArticleService
{
    protected const LAST_ARTICLES_COUNT = 6;
    protected const LATEST_COLUMN = 'created_at';

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getLastArticles()
    {
        return Article::query()->latest(self::LATEST_COLUMN)->limit(self::LAST_ARTICLES_COUNT)->get();
    }

    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getLastPaginateArticles()
    {
        return Article::query()->latest(self::LATEST_COLUMN)->paginate();
    }

    /**
     * @param int $id
     *
     * @return int
     */
    public function incrementLikes(int $id): int
    {
        $article = Article::query()->findOrFail($id);
        // todo

        return $id;
    }

    /**
     * @param int $id
     *
     * @return int
     */
    public function incrementViews(int $id): int
    {
        $article = Article::query()->findOrFail($id);
        // todo

        return $id;
    }

}
