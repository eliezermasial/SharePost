@extends('back.layout.app')

@section('title', optional($article)->exists() ? $article->title : 'Aucune article trouvé')

@section('content')
<div class=" tw-flex tw-flex-col tw-gap-12 tw-justify-center tw-p-6 lg:tw-px-10 tw-bg-cyan-50 tw-min-h-screen tw-mx-auto tw-mt-0">
    <div class="tw-mt-5">
        <h1 class=" tw-text-[#1f1e1eb4] tw-text-xl lg:tw-text-2xl tw-font-bold tw-capitalize ">
            Les Details de l'Article : {{$article->title}}
        </h1>
    </div>

    <div class=" tw-flex tw-flex-col tw-gap-6 tw-justify-center tw-w-full tw-bg-[#fff] tw-shadow-lg tw-rounded-lg tw-p-6">
        <div class="tw-rounded-lg">
            <img src="{{$article->imageUrl()}}" alt="iPhone 15" class="tw-w-full tw-rounded-lg tw-boder-2 tw-border-[#e2e1e193] tw-shadow-md">
        </div>
        <div class="tw-mt-4">
            <p class="tw-text-gray-700 ">
                Dans un monde de plus en plus connecté, le choix d’un smartphone est crucial pour de nombreuses personnes. 
                Notre dernier article met en lumière le dernier-né de la technologie mobile, le Smartphone XYZ. 
                Doté d’une combinaison époustouflante de matériel de pointe et de logiciels intelligents, 
                ce téléphone redéfinit les attentes en matière de photographie sur smartphone.
            </p>
            <p class="tw-text-gray-700 tw-mt-2">
                L'article explore en profondeur les caractéristiques techniques qui font briller le Smartphone XYZ, 
                notamment sa caméra révolutionnaire, ses capacités de photographie ultra-haute définition 
                et sa connectivité 5G ultra rapide.
            </p>
        </div>
    </div>

    <div class=" tw-flex tw-flex-col tw-gap-8 tw-justify-center tw-w-full tw-bg-[#fff] tw-shadow-lg tw-rounded-lg tw-p-6">
        <h1 class=" tw-text-[#1f1e1eb4] min-md:tw-text-center tw-text-xl lg:tw-text-2xl tw-font-bold tw-capitalize ">
            L'autheur de l'article est : {{$article->author->name}}
        </h1>
        <div class="tw-flex max-md:tw-flex-col tw-gap-4 tw-justify-between">
            <div class="tw-rounded-lg tw-shadow-sm">
                <img src="{{asset('back_auth/assets/profile/'. $article->author->image)}}" alt="{{asset($article->author->image) ? 'image de '.' '.$article->title : 'image manquante'}}" class="tw-w-full tw-h-full tw-rounded-lg tw-boder-2 tw-border-[#e2e1e193] tw-shadow-md">
            </div>
            <div class="tw-p-2 tw-shadow-md tw-rounded-md">
                <p class="tw-text-gray-700 ">
                    Dans un monde de plus en plus connecté, le choix d’un smartphone est crucial pour de nombreuses personnes. 
                    Notre dernier article met en lumière le dernier-né de la technologie mobile, le Smartphone XYZ. 
                    Doté d’une combinaison époustouflante de matériel de pointe et de logiciels intelligents, 
                    ce téléphone redéfinit les attentes en matière de photographie sur smartphone.
                </p>
                <p class="tw-text-gray-700">
                    L'article explore en profondeur les caractéristiques techniques qui font briller le Smartphone XYZ, 
                    notamment sa caméra révolutionnaire, ses capacités de photographie ultra-haute définition 
                    et sa connectivité 5G ultra rapide.
                </p>
            </div>
        </div>
        

    </div>
</div>
@endsection