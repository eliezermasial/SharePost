@extends('back.layout.app')

@section('title', 'Dashboard')

@section('content')

<div class=" tw-flex tw-flex-col tw-justify-items-start tw-p-6 tw-pb-28 tw-bg-cyan-50 tw-min-h-screen">
    <div class="tw-pt-16 tw-pb-3 md:tw-ml-56 md:tw-pl-6">
        <!-- Titre et Message de Bienvenue -->
        <div class="tw-mt-4 tw-mb-8">
            <h1 class="tw-text-2xl tw-font-bold tw-text-gray-800">Hello, Bonjour {{\Illuminate\Support\Facades\Auth::user()->name}} !</h1>
            <p class="tw-text-lg tw-text-gray-600">Dashboard</p>
        </div>

        <!-- Statistiques -->
        <div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-2 lg:tw-grid-cols-4 tw-gap-6 tw-mb-8" x-data="{ stats: [
            { count: {{Illuminate\Support\Facades\Auth::user()->role == 'author' ? $articles_author : $articles}}, text: 'Total Articles', icon: 'fa-user-plus' },
            { count: {{$categories->count()}}, text: 'Total Catégories', icon: 'fa-dollar-sign' },
            { count: {{$comments}}, text: 'Total Commentaires', icon: 'fa-file-alt' },
            { count: 364, text: 'Abonnements', icon: 'fa-globe' }
            ]}">
            <template x-for="(item, index) in stats" :key="index">
                <div x-data="{ hover: false }"
                    @mouseover="hover = true"
                    @mouseleave="hover = false"
                    class="tw-bg-white tw-rounded-lg tw-shadow-md tw-p-6 tw-flex tw-items-center tw-justify-between tw-transition-all tw-duration-300"
                    :class="hover ? 'tw-shadow-lg tw-scale-105 tw-bg-teal-50' : ''">

                    <div>
                        <p class="tw-text-3xl tw-font-semibold tw-text-teal-600" x-text="item.count"></p>
                        <p class="tw-text-sm tw-text-gray-600" x-text="item.text"></p>
                    </div>
                    <i :class="'fa ' + item.icon + ' fa-2x tw-text-teal-600'"></i>
                </div>
            </template>
        </div>

        <!-- Articles Récents -->
        <div class="tw-bg-white tw-rounded-lg tw-shadow-md tw-p-6">
            <div class="tw-flex tw-justify-between tw-items-center tw-mb-4">
                <h2 class="tw-text-xl tw-font-semibold tw-text-gray-800">Articles récents</h2>
                <a href="{{ route('article.index')}}" class="tw-bg-teal-600 tw-text-white tw-py-2 tw-px-4 tw-rounded-md hover:tw-bg-teal-700">Voir tous</a>
            </div>

            <div class="tw-overflow-x-auto">
                <table class="tw-w-full tw-text-left tw-border-collapse">
                    <thead>
                        <tr class="tw-bg-gray-100">
                            <th class="tw-py-3 tw-px-4 tw-text-gray-600">Image</th>
                            <th class="tw-py-3 tw-px-4 tw-text-gray-600">Titre</th>
                            <th class="tw-py-3 tw-px-4 tw-text-gray-600">Catégories</th>
                            <th class="tw-py-3 tw-px-4 tw-text-gray-600">Auteur</th>
                            <th class="tw-py-3 tw-px-4 tw-text-gray-600">Publication</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recent_articles as $article)   
                            <tr class="tw-border-b">
                                <td class="tw-py-3 tw-px-4">
                                    <img 
                                    src="{{ $article->imageUrl()}}" 
                                    class="tw-w-16 tw-h-10 tw-cursor-pointer tw-rounded-sm tw-border"
                                    alt="{{$article->image ? $article->title : ''}}">
                                </td>
                                <td class="tw-py-3 tw-px-4">{{$article->title}} </td>
                                <td class="tw-py-3 tw-px-4">{{$article->category->name}} </td>
                                <td class="tw-py-3 tw-px-4">{{$article->author->name}} </td>
                                <td class="tw-py-3 tw-px-4">
                                    <span class="tw-bg-teal-600 tw-text-white tw-py-1 tw-px-3 tw-rounded-md">{{$article->isActive == 1 ? 'PUBLIÉ' : 'NON PUBLIÉ'}}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection