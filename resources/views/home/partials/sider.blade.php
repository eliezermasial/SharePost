<div class="tw-container tw-mx-auto tw-py-6 tw-grid tw-grid-cols-1 tw-px-4 md:tw-grid-cols-3 tw-gap-4">
    <!-- Bloc principal : Slider -->
    <div class="tw-col-span-2 tw-relative">
        
        <div x-data="{ 
            active: 0, 
            slides: [
                @foreach ($articles->take(5) as $article)
                    { 
                        image: '{{ asset($article->imageUrl()) }}', 
                        title: '{{ $article->title }}', 
                        date: '{{ $article->created_at->format("M d, Y") }}', 
                        category: '{{ $article->category->name }}' 
                    },
                @endforeach
            ],
            startAutoSlide() {
                this.interval = setInterval(() => {
                    this.active = (this.active + 1) % this.slides.length;
                }, 5000); // Change toutes les 5 secondes
            },
            stopAutoSlide() {
                clearInterval(this.interval);
            }
        }" x-init="startAutoSlide()" class="tw-relative tw-overflow-hidden tw-rounded-lg">
        
            <!-- Images du slider -->
            <template x-for="(slide, index) in slides" :key="index">
                <div x-show="active === index" class="tw-relative tw-w-full tw-h-[300px] tw-bg-cover tw-bg-center tw-transition-opacity tw-duration-700"
                    :style="'background-image: url(' + slide.image + ');'">
                    <div class="tw-absolute tw-bottom-0 tw-left-0 tw-w-full tw-bg-black/60 tw-text-white tw-p-4">
                        <span class="tw-bg-teal-600 tw-text-white tw-px-3 tw-py-1 tw-rounded" x-text="slide.category"></span>
                        <span class="tw-ml-2 tw-text-gray-300" x-text="slide.date"></span>
                        <h2 class="tw-text-xl tw-font-bold" x-text="slide.title"></h2>
                    </div>
                </div>
            </template>

            <!-- Boutons navigation -->
            <button @click="stopAutoSlide(); active = (active === 0) ? slides.length - 1 : active - 1; startAutoSlide()"
                class="tw-absolute tw-top-1/2 tw-left-4 tw-transform -tw-translate-y-1/2 tw-bg-black/50 tw-text-white tw-rounded-full tw-p-2">
                ◀
            </button>
            <button @click="stopAutoSlide(); active = (active + 1) % slides.length; startAutoSlide()"
                class="tw-absolute tw-top-1/2 tw-right-4 tw-transform -tw-translate-y-1/2 tw-bg-black/50 tw-text-white tw-rounded-full tw-p-2">
                ▶
            </button>

            <!-- Indicateurs -->
            <div class="tw-absolute tw-bottom-5 tw-right-1 tw-transform -tw-translate-x-1/2 tw-flex tw-space-x-2">
                <template x-for="(slide, index) in slides" :key="index">
                    <div @click="stopAutoSlide(); active = index; startAutoSlide()"
                        class="tw-w-3 tw-h-3 tw-rounded-full tw-transition-all tw-duration-300"
                        :class="active === index ? 'tw-bg-yellow-500 tw-scale-125' : 'tw-bg-gray-400'"></div>
                </template>
            </div>
        </div>
    </div>

    <!-- Bloc latéral : 4 petits articles -->
    <div class="tw-grid tw-grid-cols-2 tw-gap-2 max-md:tw-col-span-2">
        @foreach ($articles->take(4) as $article) {{-- Prend seulement les 4 premiers articles --}}
            <div class="tw-relative tw-w-full tw-h-[140px] tw-bg-cover tw-bg-center tw-rounded-lg tw-shadow-lg"
                style="background-image: url('{{ asset($article->imageUrl()) }}');">
                <div class="tw-absolute tw-bottom-0 tw-left-0 tw-w-full tw-bg-black/60 tw-text-white tw-p-2">
                    <span class="tw-bg-teal-600 tw-text-white tw-px-2 tw-py-1 tw-rounded">
                        {{ $article->category->name }}
                    </span>
                    <span class="tw-ml-2 tw-text-gray-300">
                        {{ $article->created_at->format('M d, Y') }}
                    </span>
                    <h3 class="tw-text-sm tw-font-semibold">
                        {{ Str::limit($article->title, 40) }} {{-- Tronque le titre à 40 caractères --}}
                    </h3>
                </div>
            </div>
        @endforeach
    </div>
</div>
