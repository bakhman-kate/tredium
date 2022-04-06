@extends('layouts.base')

@section('title')Статьи по тэгу {{ $tag->label }}@endsection
@section('description'){{ $tag->label }}@endsection

@section('content')
    <main role="main" class="container my-36 my-lg-48 p-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route('catalog') }}">Каталог статей</a></li>
                <li class="breadcrumb-item active" aria-current="page">Статьи по тэгу {{ $tag->label }}</li>
            </ol>
        </nav>

        <h1 class="display-4">Все статьи по тэгу {{ $tag->label }}</h1>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-2">
                @foreach ($articles as $article)
                    @include ('articles.blocks.preview', ['article' => $article])
                @endforeach
            </div>
        </div>
    </main>
@endsection
