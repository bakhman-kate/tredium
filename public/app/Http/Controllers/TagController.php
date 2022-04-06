<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\{Factory, View};

class TagController extends Controller
{
    /**
     * Display article's list by tag
     *
     * @param Tag $tag
     *
     * @return Application|Factory|View
     */
    public function showArticles(Tag $tag)
    {
        $data = [
            'tag' => $tag,
            'articles' => $tag->articles,
        ];

        return view('articles.by_tag', $data);
    }

}
