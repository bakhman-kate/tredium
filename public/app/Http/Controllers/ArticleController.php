<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Services\ArticleService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\{Factory, View};

class ArticleController extends Controller
{
    /**
     * @var ArticleService
     */
    protected $articleService;

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    /**
     * Display article's list
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $data = [
            'articles' => $this->articleService->getLastPaginateArticles(),
        ];

        return view('articles.index', $data);
    }

    /**
     * Display the specified article
     *
     * @param Article $article
     *
     * @return Application|Factory|View
     */
    public function show(Article $article)
    {
        $data = [
            'article' => $article
        ];

        return view('articles.show', $data);
    }

}
