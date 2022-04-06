@extends('layouts.base')

@section('title')Каталог статей@endsection
@section('description')Список статей@endsection

@push('meta')
@endpush

@push('styles')
    <!-- Styles -->
@endpush

@push('scripts')
    <!-- Scripts -->
@endpush

@section('content')
    <main role="main" class="container my-36 my-lg-48 p-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Каталог статей</li>
            </ol>
        </nav>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Каталог статей</h1>
                <p class="lead">Вы можете ознакомиться с нашими последними статьями</p>
            </div>
        </div>

        <div class="container">
            <div class="row row-cols-1">
                @foreach ($articles as $article)
                    @include ('articles.blocks.preview', ['article' => $article])
                @endforeach
            </div>
        </div>

        {{ $articles->links() }}
    </main>
@endsection
