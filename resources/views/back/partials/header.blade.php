<header class="tw-bg-white tw-px-4 tw-py-4 tw-shadow tw-flex tw-justify-between tw-items-center">
    <button @click="openMenu = !openMenu" class="md:tw-hidden tw-bg-teal-600 tw-text-white tw-px-3 tw-py-2 tw-rounded">
        ☰ Menu
    </button>

    <h1 class="tw-text-xl tw-font-semibold"> {{Illuminate\Support\Facades\Auth::user()->name}} </h1>

    <div class="tw-relative tw-flex tw-items-center tw-space-x-4" x-data="{ openProfile: false }">
        <!-- Barre de recherche -->
        <input type="text" placeholder="Search here" class="tw-border-teal-700 tw-px-4 tw-py-1 md:tw-mr-10 tw-rounded-lg focus:tw-outline-none focus:tw-border-teal-500">

        <!-- Image de profil (clic pour ouvrir le menu) -->
        <img 
            src="{{ asset('back_auth/assets/profile/'.\Illuminate\Support\Facades\Auth::user()->image) }}" 
            class="tw-w-10 tw-h-10 tw-cursor-pointer tw-rounded-full tw-border"
            alt="User" 
            @click="openProfile = !openProfile"
        >

        <!-- Bloc profil caché par défaut -->
        <div 
            class="tw-absolute tw-top-3 md:tw-top-2 tw-right-0 tw-mt-12 tw-bg-white tw-shadow-lg tw-rounded-lg tw-w-56 tw-border tw-border-gray-200"
            x-show="openProfile" x-cloak
            @click.away="openProfile = false"
            x-transition:enter="tw-transition tw-ease-out tw-duration-200" 
            x-transition:enter-start="tw-opacity-0 tw-translate-x-10" 
            x-transition:enter-end="tw-opacity-100 tw-translate-x-0"
            x-transition:leave="tw-transition tw-ease-in tw-duration-150" 
            x-transition:leave-start="tw-opacity-100 tw-translate-y-0" 
            x-transition:leave-end="tw-opacity-0 tw-translate-y-[-10px]">
            
            <div class="tw-p-4 tw-flex tw-items-center tw-border-b tw-border-gray-100">
                <img 
                    src="{{ asset('back_auth/assets/profile/'.\Illuminate\Support\Facades\Auth::user()->image) }}" 
                    class="tw-w-12 tw-h-12 tw-rounded-full tw-mr-3" 
                    alt="User"
                >
                <div>
                    <h6 class="tw-font-semibold">{{ Illuminate\Support\Facades\Auth::user()->name }}</h6>
                    <p class="tw-text-sm tw-text-gray-500">Administrateur</p>
                </div>
            </div>

            <div class="tw-p-4 tw-space-y-2">
                <a href="{{ route('profile.edit') }}" class="tw-flex tw-items-center tw-text-gray-700 hover:tw-text-teal-600">
                    <svg class="tw-w-5 tw-h-5 tw-mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A3 3 0 017 21h10a3 3 0 012.879-3.196M16 11a4 4 0 00-8 0m8 0v2m0-2H8m4-7a4 4 0 014 4v4"></path>
                    </svg>
                    Profil
                </a>

                <a href="settings.html" class="tw-flex tw-items-center tw-text-gray-700 hover:tw-text-teal-600">
                    <svg class="tw-w-5 tw-h-5 tw-mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6 0a9 9 0 11-9-9 9 9 0 019 9z"></path>
                    </svg>
                    Paramètres
                </a>

                <form action="{{ route('logout') }}" method="POST" class="tw-flex tw-items-center">
                    @csrf
                    <button type="submit" class="tw-flex tw-items-center tw-text-gray-700 hover:tw-text-red-600 w-full">
                        <svg class="tw-w-5 tw-h-5 tw-mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H7a2 2 0 01-2-2V7a2 2 0 012-2h4a2 2 0 012 2v1"></path>
                        </svg>
                        Déconnexion
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>