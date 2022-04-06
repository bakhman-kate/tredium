<div class="col mb-4">
    <div class="card border-light h-100">
        <a href="/articles/{{ $article->slug }}">
            <img src="{{ $article->preview_url }}" class="card-img-top" alt="{{ $article->title }}">
        </a>
        <div class="card-body">
            <a href="/articles/{{ $article->slug }}">
                <h5 class="card-title">{{ $article->title }}</h5>
            </a>
            <p class="card-text">{{ $article->getPreviewText() }}</p>
            <p class="card-text"><small class="text-muted">{{ $article->created_at }}</small></p>
        </div>
        <div class="card-footer text-muted">
            <span>
                <i class="bi bi-eye-fill" role="img" aria-label="Views"></i>&nbsp;{{ $article->getViewCount() }}
            </span>
            <button type="button" class="btn btn-light like-button">
                <i class="bi bi-heart" role="img" aria-label="Likes"></i>&nbsp;{{ $article->getLikesCount() }}
            </button>
        </div>
    </div>
</div>
