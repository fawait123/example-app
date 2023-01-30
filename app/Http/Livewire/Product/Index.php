<?php

namespace App\Http\Livewire\Product;

use App\Models\product;
use Livewire\Component;

class Index extends Component
{
    public $search = '';
    public $limit = 10;

    protected $queryString= ['search','limit'];

    public function render()
    {
        $query = product::query();
        $query = $query->where('nama','like','%'.$this->search.'%');
        $query = $query->paginate($this->limit);
        return view('livewire.product.index',compact('query'));
    }
}
