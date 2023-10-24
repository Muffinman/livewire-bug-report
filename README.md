# Setup instructions

1. Clone repo
2. Setup DB
3. `composer install`
4. `php artisan migrate:fresh --seed`
5. Visit home page in browser

Trying the `Only show items in stock` button breaks the reactivity and produces the console errors:

```js
Uncaught Snapshot missing on Livewire component with id: euNHEveZlIRPnOpFLFsv

Uncaught (in promise) Component not found: euNHEveZlIRPnOpFLFsv
```
