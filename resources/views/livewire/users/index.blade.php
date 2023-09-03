<div class="container">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title mb-4">List Users</h2>

            <div class="mw-100 overflow-auto">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $loop->index + $users->firstItem() }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->toFormattedDateString() }}</td>
                            <td>
                                <a wire:navigate href="{{ route('users.show', $user) }}"
                                   class="text-primary">Show</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-4 mw-100 overflow-auto">
                <x-pagination :items="$users"/>
            </div>
        </div>
    </div>
</div>