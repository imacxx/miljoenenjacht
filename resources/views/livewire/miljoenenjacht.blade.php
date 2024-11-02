<div class="miljoenenjacht-container">
    <div class="container">
        <div class="amount-column left">
            @foreach(array_slice($amounts, 0, 13) as $index => $amount)
                <div class="amount" wire:click="removeAmount({{ $amount }})"
                     x-data="{ removed: false }" @click="removed = true"
                     :class="{ 'removed': removed }" style="top: {{ $index * 80 }}px;">
                    €{{ number_format($amount, 2, ',', '.') }}
                </div>
            @endforeach
        </div>

        <div class="amount-column right">
            @foreach(array_slice($amounts, 13) as $index => $amount)
                <div class="amount" wire:click="removeAmount({{ $amount }})"
                     x-data="{ removed: false }" @click="removed = true"
                     :class="{ 'removed': removed }" style="top: {{ $index * 80 }}px;">
                    €{{ number_format($amount, 2, ',', '.') }}
                </div>
            @endforeach
        </div>
    </div>

    <button class="reset-button" wire:click="resetAmounts">Reset</button>
</div>
