<?php

namespace App\Http\Controllers;

use App\Services\ArticleService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\{Factory, View};

class MainPageController extends Controller
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
     * @return Application|Factory|View
     */
    public function index()
    {
        $data = [
            'articles' => $this->articleService->getLastArticles(),
        ];

        return view('home', $data);
    }

}
