@props([
    'product'
])
<div>
    <livewire:product-single-add wire:key="product-single-add-{{ $product->id }}" :product="$product" />
</div>
