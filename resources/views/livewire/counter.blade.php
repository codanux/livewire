<div xmlns:wire="http://www.w3.org/1999/xhtml">
    <input type="text" wire:model.lazy="count">
    <div style="text-align: center">
        <button wire:click="increment">+</button>
        <h1>{{ $count }}</h1>
        <button wire:click="decrement">-</button>
    </div>
</div>
