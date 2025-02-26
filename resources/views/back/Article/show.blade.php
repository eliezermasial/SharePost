@extends('back.layout.app')

@section('title', optional($article)->exists() ? $article->title : 'Aucune article trouvé')

@section('content')
<div class="tw-p-6 tw-pb-28 tw-bg-cyan-50 tw-min-h-screen">
    <div class="tw-pt-16 tw-pb-3 md:tw-ml-56 md:tw-pl-6">
    <!--<div class="tw-w-full tw-flex tw-flex-col tw-justify-center tw-items-center tw-max-w-4xl tw-mx-auto tw-bg-cyan-50 tw-min-h-screen tw-p-6 lg:tw-px-10">-->
    
        <div class="tw-py-5 tw-mb-7">
            <h1 class="tw-text-[#1f1e1eb4] tw-text-xl lg:tw-text-2xl md:tw-text-center tw-font-bold tw-capitalize">
                Les Détails de l'Article : {{$article->title}}
            </h1>
        </div>

        <div class="tw-flex tw-flex-col tw-gap-6 tw-justify-center tw-bg-[#fff] tw-mb-10 tw-shadow-lg tw-rounded-lg tw-p-6">
            <div class="tw-rounded-lg tw-h-1/2 tw-flex tw-justify-center">
                <img src="{{$article->imageUrl()}}" alt="iPhone 15" class="tw-rounded-lg tw-border-2 tw-border-[#e2e1e193] tw-shadow-md">
            </div>
            <div class="tw-mt-4 md:tw-mt-7">
                <p class="tw-text-gray-700 tw-my-2">
                    {{ $article->content }}
                </p>
            </div>
        </div>

        @if ($article->tags->isNotEmpty())
        <div class="tw-mb-7 tw-bg-[#ffffffdc] tw-px-6 tw-py-2 tw-text-center">
            <h3 class="tw-text-lg tw-mb-2 tw-font-bold tw-text-[#1f1e1eb4]">Tags :</h3>
            <div class="tw-flex tw-flex-wrap tw-justify-center tw-gap-4">
                @foreach ($article->tags as $tag)
                    <span class="tw-bg-teal-600 tw-p-2 tw-rounded-lg tw-shadow-md tw-text-sm tw-font-semibold">
                        {{$tag->name}}
                    </span>
                @endforeach
            </div>
        </div>
        @endif

        <div class="tw-flex tw-flex-col tw-gap-8 tw-justify-center tw-bg-[#fff] tw-shadow-lg tw-rounded-lg tw-p-6 tw-mt-4">
            <h1 class="tw-text-[#1f1e1eb4] tw-my-2 tw-text-center tw-text-xl lg:tw-text-2xl tw-font-bold tw-capitalize">
                L'auteur de l'article est : {{$article->author->name}}
            </h1>
            <div class="tw-flex tw-flex-col md:tw-flex-row tw-gap-4 tw-items-center md:tw-justify-between">
                <div class="tw-rounded-lg tw-shadow-sm md:tw-w-full">
                    <img src="{{asset('back_auth/assets/profile/'. $article->author->image)}}" alt="{{asset($article->author->image) ? 'image de '.' '.$article->title : 'image manquante'}}" class="tw-w- tw-h-auto tw-rounded-lg tw-border-2 tw-border-[#e2e1e193] tw-shadow-md">
                </div>
                <div class="tw-p-2 tw-shadow-md tw-rounded-md tw-w-full">
                    <p class="tw-text-gray-700">
                        Dans un monde de plus en plus nombreuses personnes. 
                        ce téléphone redéfinit l
                    </p>
                    <p class="tw-text-gray-700">
                        L'article explore en profondeur le XYZ,
                        et sa connectivité 5G ultra rapide.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--</div>-->
</div>
@endsection