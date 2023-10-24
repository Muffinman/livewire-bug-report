<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;

    public bool $in_stock = false;

    public function render()
    {
        $query = Product::query();

        if ($this->in_stock === true) {
            $query->where('in_stock', 1);
        }

        return view('livewire.product-list', [
            'products' => $query->paginate(10),
        ]);
    }

    protected function withPagination()
    {
        return 'livewire.tailwind';
    }
}
