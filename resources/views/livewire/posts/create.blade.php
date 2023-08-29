<div class="m-5 card">
    <div class="card-body">
        <h3 class="card-title">New Post</h3>

        <form wire:submit="save">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input wire:model="title" type="text" class="form-control" id="title" placeholder="Title">
                @error('title')
                <span class="d-block mt-1 text-danger text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea wire:model="body" class="form-control" id="body" rows="3"></textarea>
                @error('body')
                <span class="d-block mt-1 text-danger text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="user_id" class="form-label">User</label>
                <select wire:model="user_id" class="form-select" id="user_id">
                    <option selected>Please select</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                @error('user_id')
                <span class="d-block mt-1 text-danger text-sm">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
