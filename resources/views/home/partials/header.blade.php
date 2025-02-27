<!-- Header -->
<header class="tw-bg-white tw-shadow">
    <div class="tw-container tw-mx-auto tw-flex tw-justify-between tw-items-center tw-py-4">
        <!-- Logo -->
        <h1 class="tw-text-3xl tw-font-bold">
            <span class="tw-text-teal-500">TECH</span><span class="tw-text-gray-900">NEWS</span>
        </h1>

        <!-- Navigation -->
        <nav class="tw-flex tw-space-x-6 tw-items-center">
            <a href="#" class="tw-text-yellow-500 tw-font-bold tw-px-3">ACCUEIL</a>
            <a href="#" class="tw-text-gray-800 hover:tw-text-yellow-500">POST</a>
        
            <!-- Bouton CATEGORIE avec Alpine.js -->
            <div  class="tw-relative">
                <button @click="open = !open" class="tw-text-gray-800 hover:tw-text-yellow-500 tw-flex tw-items-center">
                    CATEGORIE ▼
                </button>
        
                <!-- Liste déroulante avec animation -->
                <div x-show="open" 
                    @click.away="open = false"
                    x-transition:enter="tw-transition tw-duration-300 tw-ease-out"
                    x-transition:enter-start="tw-opacity-0 tw-translate-y-2"
                    x-transition:enter-end="tw-opacity-100 tw-translate-y-0"
                    x-transition:leave="tw-transition tw-duration-200 tw-ease-in"
                    x-transition:leave-start="tw-opacity-100 tw-translate-y-0"
                    x-transition:leave-end="tw-opacity-0 tw-translate-y-2"
                    class="tw-absolute tw-bg-white tw-shadow-md tw-z-10 tw-mt- tw-rounded-sm tw-w-40 tw-border tw-border-gray-200 tw-overflow-hidden">

                    @foreach ($Global_category as $category)
                        <a href="#" class="tw-block tw-px-4 tw-py-2 hover:tw-bg-gray-100"> {{$category->name}}</a>
                    @endforeach
                </div>
            </div>
        
            <a href="#" class="tw-text-gray-800 hover:tw-text-yellow-500">CONTACT</a>
        </nav>

        <!-- Barre de recherche -->
        <div class="tw-relative">
            <input type="text" placeholder="Rechercher..." class="tw-px-4 tw-py-1 tw-rounded-full tw-w-40 tw-border-2 tw-border-[#242323b4]  focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600">
            <button class="tw-absolute tw-right-0 tw-top-0 tw-h-full tw-bg-teal-600 tw-text-white tw-px-3 tw-rounded-r-full">🔍</button>
        </div>
    </div>
</header>