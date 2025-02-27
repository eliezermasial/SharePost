<header class="tw-bg-gray-900 tw-text-gray-300 tw-text-sm">
    <div class="tw-container tw-mx-auto tw-flex tw-justify-between tw-items-center tw-py-2 tw-px-4">
        <!-- Date -->
        <div class="tw-text-gray-400">
            @php
                \Carbon\Carbon::setLocale('fr'); // Force l'utilisation du français
                $date = \Carbon\Carbon::now();
            @endphp
            <span>{{$date->translatedFormat('l d F Y')}} </span>
            <a href="#" class="hover:tw-text-teal-400 tw-text-teal-600 tw-mr-4">Login</a>
        </div>

        <!-- Réseaux sociaux -->
        <div class="tw-flex tw-space-x-3">
            @foreach ($Global_sociaux as $social)
                <a href="{{$social->lien}}" class="tw-text-gray-400 hover:tw-text-teal-600">
                    <i class="fab {{$social->icon}}"></i>
                </a>
            @endforeach
        </div>
    </div>
</header>
