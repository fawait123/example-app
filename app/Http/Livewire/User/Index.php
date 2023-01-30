<?php

namespace App\Http\Livewire\User;

use App\Models\Member;
use Livewire\Component;

class Index extends Component
{
    public $search = '';
    public $limit = 10;

    public function render()
    {

        $query = Member::query();
        $query = $query->where('name', 'like', '%' . $this->search . '%');
        $query = $query->paginate($this->limit);
        return view('livewire.user.index', compact('query'));
    }
}
