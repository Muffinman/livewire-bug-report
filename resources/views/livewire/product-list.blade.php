<div>
    <label for="in_stock" class="cursor-pointer">
        <input type="checkbox" wire:model.live="in_stock" name="in_stock" id="in_stock" />
        Only show items in stock
    </label>

    {{ $products->links() }}

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-10 gap-y-12 mt-10 transition-all duration-300 mb-10" wire:loading.class="opacity-0 max-h-0">
        @foreach ($products as $product)
            <x-product-teaser :product="$product" />
        @endforeach
    </div>

    <div wire:loading.flex class="flex items-center justify-center">
        <span class="block loading loading-spinner text-primary w-8 h-8 my-8">Loading</span>
    </div>

    {{ $products->links() }}
</div>
