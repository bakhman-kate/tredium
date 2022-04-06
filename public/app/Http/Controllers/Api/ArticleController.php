<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ArticleService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
     * Инкрементирование счетчика лайков статьи
     *
     * @param Request $request
     * @param int $id
     *
     * @return JsonResponse
     */
    public function incrementLikes(Request $request, int $id)
    {
        return response()->json(['result' => $this->articleService->incrementLikes($id)]);
    }

    /**
     * Инкрементирование счетчика просмотров статьи
     *
     * @param Request $request
     * @param int $id
     *
     * @return JsonResponse
     */
    public function incrementViews(Request $request, int $id)
    {
        return response()->json(['result' => $this->articleService->incrementViews($id)]);
    }

}
