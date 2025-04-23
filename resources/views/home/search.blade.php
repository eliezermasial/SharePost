@extends('home.layouts.home')

@section('title', 'Recherche')

@section('content')

    <div class="tw-container tw-mx-auto tw-px-4 tw-py-3">
        <!-- Grille principale -->
        <div class="tw-mt-4 tw-grid tw-grid-cols-1 lg:tw-grid-cols-3 tw-gap-4">
            <!-- Section de gauche : Drones et Robotique + Articles -->
            <div class="tw-col-span-2">
                <div class="tw-mb-4">
                    <!-- Titre de la catégorie -->
                    <div class="tw-flex tw-justify-between tw-items-center tw-bg-white tw-shadow tw-rounded-md tw-p-4">
                        <h2 class="tw-text-xl tw-font-bold tw-border-l-4 tw-border-yellow-500 tw-pl-2">
                            Resultat de la Recherche
                        </h2>
                    </div>

                    <!-- Liste des articles -->
                    <div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-2 tw-gap-4 tw-mt-4">
                        @if ($articles->count())
                            @foreach ($articles as $article)
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
                        @else
                            <div class="tw-mt-4 tw-text-center tw-text-gray-500 tw-text-lg">
                                Aucun article trouvé
                            </div>
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