<div class="miljoenenjacht-container">
    <div class="container" x-data="progressBar()">
        <div class="amount-column left">
            @foreach(array_slice($amounts, 0, 13) as $index => $amount)
                <div class="amount" wire:click="removeAmount({{ $amount }})"
                     x-data="{ removed: false }" @click="removed = true"
                     :class="{ 'removed': removed }" style="top: {{ $index * 80 }}px;">
                    €{{ number_format($amount, 2, ',', '.') }}
                </div>
            @endforeach
        </div>

        <!-- Progress Bar in the Middle -->
        <div class="progress-bar-container">
            <!-- Progress Bar -->
            <div class="progress-bar">
                <!-- Threshold Markers with Stars -->
                <template x-for="threshold in thresholds" :key="threshold">
                    <div class="threshold-marker" :style="{ left: (threshold / maxPoints * 100) + '%' }">
                        <svg x-show="currentPoints >= threshold" class="star-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#f1c40f" width="24px" height="24px">
                            <path d="M12 .587l3.668 7.568L24 9.75l-6 5.854L19.336 24 12 20.201 4.664 24l1.336-8.396L0 9.75l8.332-1.595z"/>
                        </svg>
                    </div>
                </template>
                <!-- Progress Fill -->
                <div class="progress-fill" :style="{ width: (currentPoints / maxPoints * 100) + '%' }"></div>
            </div>

            <!-- Buttons to Add Points -->
            <div class="progress-buttons">
                <button @click="addPoints(1)">Add 1 Point</button>
                <button @click="addPoints(3)">Add 3 Points</button>
                <button @click="addPoints(5)">Add 5 Points</button>
            </div>
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

<!-- Alpine.js Component -->
<script>
    function progressBar() {
        return {
            currentPoints: 0,
            maxPoints: 75,
            thresholds: [15, 25, 35, 50, 65],
            addPoints(points) {
                if (this.currentPoints + points <= this.maxPoints) {
                    this.currentPoints += points;
                } else {
                    this.currentPoints = this.maxPoints;
                }
            }
        }
    }
</script>
