@extends('home.layouts.home')

@section('title', 'accueil')

@section('content')

<div class="tw-container tw-mx-auto tw-px-4 tw-py-3">
    
    <!-- Section Populaires -->
    <div class="tw-p- tw-flex tw-flex-col tw-gap-4">
        <div class="tw-bg-white tw-shadow tw-rounded-md tw-p-4">
            <h2 class="tw-text-xl tw-font-bold tw-border-l-4 tw-border-yellow-500 tw-pl-2">POPULAIRES</h2>
        </div>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper tw-grid tw-grid-cols-4 tw-gap-3">
                @foreach ($fanous_articles as $article)
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
                        <h3 class="tw-font-bold tw-text-3xl tw-mt-4">{{$article->title}}</h3>
                    </div>
                </div>
                @endforeach
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
            @foreach ($categories as $category)
                <div class="tw-mb-4">
                    <!-- Titre de la catégorie -->
                    <div class="tw-flex tw-justify-between tw-items-center tw-bg-white tw-shadow tw-rounded-md tw-p-4">
                        <h2 class="tw-text-xl tw-font-bold tw-border-l-4 tw-border-yellow-500 tw-pl-2">{{ $category->name }}</h2>
                        <a href="#" class="tw-text-[#0000007e] tw-font-semibold tw-text-sm">Voir tous</a>
                    </div>

                    <!-- Liste des articles -->
                    <div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-2 tw-gap-4 tw-mt-4">
                        @if ($category->articles->count())
                            @foreach ($category->Articles->take(2) as $article)
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
            @endforeach
        </div>

        <div class="tw-flex tw-flex-col tw-gap-10 max-md:tw-col-span-2">

            <!-- Section Suivez-nous -->
            <div class="tw-bg-white tw-shadow tw-rounded-md max-md:tw-col-span-2">
                <h2 class="tw-text-xl tw-font-bold tw-border-l-4 tw-py-2 tw-border-b-2 tw-border-l-yellow-500 tw-border-b-gray-200 tw-pl-2">
                    SUIVEZ NOUS
                </h2>
                <div class="tw-mt-4 tw-p-4 tw-pt-0 tw-space-y-2">
                    <div class="tw-flex tw-items-center tw-bg-blue-600 tw-text-white tw-p-2 tw-rounded">
                        <span class="tw-flex-1">📘 Facebook</span>
                        <span>12,345 Fans</span>
                    </div>
                    <div class="tw-flex tw-items-center tw-bg-blue-400 tw-text-white tw-p-2 tw-rounded">
                        <span class="tw-flex-1">🐦 Twitter</span>
                        <span>12,345 Followers</span>
                    </div>
                    <div class="tw-flex tw-items-center tw-bg-blue-700 tw-text-white tw-p-2 tw-rounded">
                        <span class="tw-flex-1">🔗 LinkedIn</span>
                        <span>12,345 Connects</span>
                    </div>
                    <div class="tw-flex tw-items-center tw-bg-pink-600 tw-text-white tw-p-2 tw-rounded">
                        <span class="tw-flex-1">📸 Instagram</span>
                        <span>12,345 Followers</span>
                    </div>
                </div>
            </div>

            <!-- Section recentes articles -->
            <div class="tw-bg-white tw-shadow tw-rounded-md max-md:tw-col-span-2">
                <h2 class="tw-text-xl tw-font-bold tw-border-l-4 tw-py-2 tw-border-b-2 tw-border-l-yellow-500 tw-border-b-gray-200 tw-pl-2">
                    RECENTES ARTICLES
                </h2>
                <div class="tw-mt-4 tw-p-4 tw-pt-0 tw-space-y-2">
                    @foreach ($Global_recent_articles->take(5) as $article)
                        <div class="tw-flex tw-items-center tw-text-whit tw-p-2 tw-rounded">
                            <div class="tw-flex tw-gap-2">
                                <img src="{{$article->imageUrl()}}" class="tw-w-[50%] tw-h-[35%]" alt="{{$article->title}}">
                                <div class="">
                                    <div class="tw-px-2 tw-mb-2 tw-py-1 tw-w-full tw-rounded-sm tw-bg-teal-600">
                                        <span class="tw-w-[100%] tw-font-bold-sm tw-text-white">{{$article->category->name}}</span>
                                    </div>
                                    <h4 class=" tw-text-base tw-font-bold tw-text-[#000000bd]">{{$article->title}} </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Liste des tags enregistrés -->
            <div class="tw-bg-white tw-shadow tw-rounded-md max-md:tw-col-span-2">
                <h2 class="tw-text-xl tw-font-bold tw-border-l-4 tw-py-2 tw-border-b-2 tw-border-l-yellow-500 tw-border-b-gray-200 tw-pl-2">
                    TAGS
                </h2>
                <div class="tw-mt-4 tw-p-4 tw-pt-0 tw-grid tw-grid-cols-2 tw-gap-2">
                    @foreach ($Global_tags->take(16) as $tag)
                        <div class="block_tag tw-border-2 tw-border-teal-900 hover:tw-text-[#ffff] hover:tw-bg-teal-900 hover:tw-p-3 tw-p-2 tw-rounded tw-h-10 tw-flex tw-items-center">
                            <span class="tw-truncate tw-w-full">{{$tag->name}}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection