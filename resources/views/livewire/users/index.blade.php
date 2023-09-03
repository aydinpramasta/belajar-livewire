<div class="container">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title mb-4">List Users</h2>

            <div class="row mb-4">
                <div class="col-md-3">
                    <label for="search" class="visually-hidden">Search...</label>
                    <input wire:model.live.debounce.500ms="query"
                           type="search" id="search"
                           class="form-control" placeholder="Search..."/>
                </div>

                <div class="col-md-1">
                    <label for="limit" class="visually-hidden">Limit</label>
                    <select wire:model.live="limit"
                            id="limit" class="form-select">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="75">75</option>
                        <option value="100">100</option>
                    </select>
                </div>
            </div>

            <div class="mw-100 overflow-auto">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">
                            <span role="button" wire:click="sortBy('name')">
                                Name
                                <x-sort-icon column="name" :field="$field" :direction="$direction"/>
                            </span>
                        </th>
                        <th scope="col">
                            <span role="button" wire:click="sortBy('email')">
                                Email
                                <x-sort-icon column="email" :field="$field" :direction="$direction"/>
                            </span>
                        </th>
                        <th scope="col">
                            <span role="button" wire:click="sortBy('created_at')">
                                Created At
                                <x-sort-icon column="created_at" :field="$field" :direction="$direction"/>
                            </span>
                        </th>
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