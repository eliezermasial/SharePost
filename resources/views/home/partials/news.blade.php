<!-- Breaking News -->
<div x-init="start = true" class="tw-bg-black tw-w-full tw-px-6 tw-text-white tw-py-2 tw-overflow-hidden">
    <div class="tw-flex tw-items-center tw-gap-4 tw-px-6 tw-whitespace-nowrap">
        <!-- Badge "Breaking News" -->
        <span class="tw-bg-blue-500 tw-text-white tw-px-3 tw-py-1 tw-rounded">Breaking News</span>
        
        <!-- Ticker -->
        <div class="tw-relative tw-w-full tw-overflow-hidden">
            <div x-ref="ticker"
                x-init="$nextTick(() => {
                    let ticker = $refs.ticker;
                    ticker.classList.add('tw-animate-scroll');
                })"
                class="tw-inline-flex tw-space-x-8">
                <span class="tw-inline-block tw-text-teal-600">
                    LOREM IPSUM DOLOR SIT AMET ELIT. PROIN INTERD . LOREM IPSUM DOLOR SIT AMET ELIT. PROIN INTERD .
                </span>
            </div>
        </div>
    </div>
</div>
