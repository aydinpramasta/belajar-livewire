<div class="d-flex flex-column">
    @foreach($users as $user)
        <a wire:navigate href="{{ route('users.show', $user) }}">{{ $user->name }}</a>
    @endforeach
</div>
