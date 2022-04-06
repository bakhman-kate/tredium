@extends('layouts.base')

@section('title')Главная страница@endsection
@section('description')Статейник@endsection

@section('content')
    <main role="main" class="container my-36 my-lg-48 p-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item active" aria-current="page">Главная</li>
            </ol>
        </nav>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">{{ env('APP_NAME') }}</h1>
                <p class="lead">Вы можете ознакомиться с нашими последними <a href="{{ route('catalog') }}">статьями</a></p>
            </div>
        </div>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-2">
                @foreach ($articles as $article)
                    @include ('articles.blocks.preview', ['article' => $article])
                @endforeach
            </div>
        </div>
    </main>
@endsection
