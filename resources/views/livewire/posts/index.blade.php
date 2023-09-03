<div class="mt-4 container">
    <div class="row gy-4">
        <div class="col-md-6">
            <livewire:posts.create/>
        </div>

        <div class="col-md-6">
            <div class="container">
                <div class="row gy-4">
                    @foreach($posts as $post)
                        <livewire:posts.item :post="$post" wire:key="{{ $post->id }}"/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
