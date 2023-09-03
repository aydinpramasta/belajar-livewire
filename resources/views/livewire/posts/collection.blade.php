<div class="container">
    <div class="row gy-4">
        @forelse($posts as $post)
            <livewire:posts.item :post="$post" wire:key="{{ $post->id }}"/>
        @empty
            <h5>No posts yet.</h5>
        @endforelse
    </div>
</div>