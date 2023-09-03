<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Url(as: 'q', history: true)]
    public string $query = '';

    #[Url(history: true)]
    public int $limit = 10;

    #[Url()]
    public string $field = 'created_at';

    #[Url()]
    public string $direction = 'desc';

    public function sortBy(string $column): void
    {
        if ($this->field === $column) {
            $this->direction = $this->direction === 'asc' ? 'desc' : 'asc';
        } else {
            $this->direction = 'asc';
        }

        $this->field = $column;
    }

    public function updated(mixed $property): void
    {
        if ($property === 'query') {
            $this->resetPage();
        }
    }

    public function render(): View
    {
        $users = User::query()
            ->when($this->query, function (Builder $query) {
                $query->where('name', 'LIKE', '%' . $this->query . '%')
                    ->orWhere('email', 'LIKE', '%' . $this->query . '%');
            })->when(
                $this->field && $this->direction,
                function (Builder $query) {
                    $query->orderBy($this->field, $this->direction);
                },
                function (Builder $query) {
                    $query->latest();
                },
            )->paginate($this->limit);

        return view('livewire.users.index')
            ->with(['users' => $users])
            ->title('List Users');
    }
}
