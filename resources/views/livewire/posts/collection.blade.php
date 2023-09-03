<div class="container">
    <div class="row gy-4">
        @foreach($posts as $post)
            <livewire:posts.item :post="$post" wire:key="{{ $post->id }}"/>
        @endforeach
    </div>
</div>