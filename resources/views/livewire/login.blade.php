<div class="card">
    <div class="card-body">
        <h3 class="card-title text-center">Login</h3>

        <form wire:submit="authenticate" class="mt-3">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input wire:model="email" type="email" class="form-control" id="email" placeholder="Email">
                @error('email')
                <span class="d-block mt-1 text-danger text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input wire:model="password" type="password" class="form-control" id="password" placeholder="Password">
                @error('password')
                <span class="d-block mt-1 text-danger text-sm">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
