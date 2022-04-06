@extends('layouts.base')

@section('title'){{ $article->title }}@endsection
@section('description'){{ $article->description }}@endsection

@section('content')
    <main role="main" class="container my-36 my-lg-48 p-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route('catalog') }}">Каталог статей</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $article->title }}</li>
            </ol>
        </nav>

        <div class="container">
            <h1>{{ $article->title }}</h1>
        </div>

        <div class="container">
            <div class="row row-cols-1">
                <div class="col mb-4">
                    <div class="card border-light">
                        <img src="{{ $article->image_url }}" class="card-img-top" alt="{{ $article->title }}">
                        <div class="card-body">
                            <span>
                                <i class="bi bi-eye-fill" role="img" aria-label="Views"></i>&nbsp;{{ $article->getViewCount() }}
                            </span>
                            <button type="button" class="btn btn-light like-button">
                                <i class="bi bi-heart" role="img" aria-label="Likes"></i>&nbsp;{{ $article->getLikesCount() }}
                            </button>

                            <p class="card-text"><small class="text-muted">{{ $article->created_at }}</small></p>
                            <p class="card-text">
                                @foreach($article->tags as $tag)
                                    <a href="/tags/{{ $tag->url }}" class="badge badge-dark">{{ $tag->label }}</a>
                                @endforeach
                            </p>
                            <p class="card-text">{{ $article->description }}</p>
                        </div>
                    </div>
                    <hr>

                    <form id="add-comment">
                        <fieldset>
                            <legend>Оставить комментарий</legend>
                            @csrf
                            <input id="article_id" name="article_id" type="hidden" value="{{ $article->id }}" />
                            <div class="form-group result"></div>

                            <div class="form-group">
                                <input id="comment-subject" name="subject" class="form-control" type="text" placeholder="Тема сообщения" />
                            </div>
                            <div class="form-group">
                                <textarea id="comment-body" name="body" class="form-control" rows="3" placeholder="Текст сообщения"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-light">Отправить</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
