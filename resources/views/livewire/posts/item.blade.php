<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ $post->title }}</h4>
        <p class="card-text">{{ $post->body }}</p>
        <small class="text-body-secondary">{{ $post->created_at->diffForHumans() }}</small>
    </div>
</div>
