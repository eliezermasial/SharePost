@extends('home.layouts.home')

@section('title', ($category->name ?? $category->name))

@section('content')

    <div class="tw-container tw-mx-auto tw-grid tw-grid-cols-1 tw-gap-10 tw-px-4 tw-py-3">
        <!-- Section Populaires -->
        <div class="tw-flex tw-flex-col tw-gap-4">
            <div class="tw-bg-white tw-shadow tw-rounded-md tw-p-4">
                <h2 class="tw-text-xl tw-font-bold tw-border-l-4 tw-border-yellow-500 tw-pl-2">POPULAIRES</h2>
            </div>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper tw-grid tw-grid-cols-2 md:tw-grid-cols-4 tw-gap-3">
                    @if ($Global_popular_articles->count())
                        @foreach ($Global_popular_articles as $article)
                            <!-- Article populaire -->
                            <div class="swiper-slide tw-relative tw-w-full tw-h-">
                                <img src="{{ asset($article->imageUrl()) }}" alt="{{ $article->title }}" class="tw-absolute tw-top-0 tw-left-0 tw-w-full tw-h-full tw-object-cover">
                                
                                <!-- Overlay pour améliorer la lisibilité -->
                                <div class="tw-absolute tw-top-0 tw-left-0 tw-w-full tw-h-full tw-bg-black tw-bg-opacity-50"></div>

                                <!-- Contenu au-dessus de l'image -->
                                <div class="tw-relative tw-z-10 tw-flex tw-flex-col tw-items-center tw-justify-center tw-h-full tw-text-[#ffffffd0] tw-text-center tw-p-4">
                                    <span class="tw-bg-green-600 tw-text-white tw-text-xs tw-font-bold tw-py-1 tw-px-2 tw-rounded">{{ $article->category->name }}</span>
                                    <p class="tw-text-gray-300 tw-text-sm">{{$article->created_at->format('M d, y') }}</p>
                                    <p class="tw-text-gray-300 tw-text-sm">Followers: {{$article->views}}</p>
                                    <h3 class="tw-font-bold tw-text-md md:tw-text-2xl tw-mt-4">{{$article->title}}</h3>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <!-- Pagination et navigation 
                <div class="swiper-pagination">></div>
                <div class="swiper-button-prev"><</div>
                <div class="swiper-button-next">=</div>
                -->
            </div>
        </div>

        <!-- Grille principale -->
        <div class="tw-mt-4 tw-grid tw-grid-cols-1 lg:tw-grid-cols-3 tw-gap-4">
            <!-- Section de gauche : Drones et Robotique + Articles -->
            <div class="tw-col-span-2">
                <div class="tw-mb-4">
                    <!-- Titre de la catégorie -->
                    <div class="tw-flex tw-justify-between tw-items-center tw-bg-white tw-shadow tw-rounded-md tw-p-4">
                        <h2 class="tw-text-xl tw-font-bold tw-border-l-4 tw-border-yellow-500 tw-pl-2">{{ $category->name }}</h2>
                        
                    </div>

                    <!-- Liste des articles -->
                    <div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-2 tw-gap-4 tw-mt-4">
                        <!-- Check if the category has articles -->
                        @if ($category->articles->count()) 
                            @foreach ($category->Articles as $article)
                                <div class="tw-bg-white tw-shadow tw-rounded-md tw-p-4">
                                    <div class="tw-bg-red">
                                        <img src="{{$article->imageUrl()}}" alt="">
                                    </div>
                                    <a href="{{ route('detail', $article->slug)}}">
                                        <h3 class="tw-text-lg tw-font-bold tw-mt-2">{{$article->title}}</h3>
                                    </a>
                                    <div class="tw-flex tw-justify-between tw-items-center tw-mt-4 tw-text-gray-500 tw-text-xs">
                                        <div class="tw-flex tw-gap-2">
                                            <img src="{{ asset('back_auth/assets/profile/'.$article->author->image) }}" class="tw-w-10 tw-h-10 tw-rounded-full" alt="{{$article->author->image ? explode(' ', $article->author->name)[0] : 'image'}}">
                                            <span class="tw-mt-3">{{$article->author->name}} </span>
                                        </div>
                                        <div class="tw-flex tw-space-x-2">
                                            <span>👁️ {{$article->views}}</span>
                                            @if ($article->comments()->count())
                                                <a href="{{ route('detail', $article)}}" target="_blank" rel="noopener noreferrer">
                                                    <span>💬 {{$article->comments()->count()}}</span>
                                                </a>
                                            @else
                                                <span>💬 0</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

            <!-- Section de droit : Drones et Robotique + Articles -->
            <div class="tw-flex tw-flex-col max-md:tw-mt-10 tw-gap-10 max-md:tw-col-span-2">
                @include('home.follower')
            </div>
        </div>
    </div>
@endsection