@extends('back.layout.app')

@section('title', 'Articles')

@section('content')
<div class="tw-p-6 tw-bg-cyan-50 tw-min-h-screen">
    <div class="tw-pt-16 tw-pb-3 md:tw-ml-56 md:tw-pl-6">

        <!-- Titre et Message de Bienvenue -->
        <div class=" tw-flex max-md:tw-flex-col max-md:tw-gap-6 tw-justify-between tw-py-5 tw-mb-7">
            <h1 class="tw-text-2xl tw-font-bold tw-text-gray-800">Les Articles Presents</h1>
            <div>
                <a href="{{route('article.create')}}" class="tw-bg-teal-700 veiwbutton tw-rounded-md tw-p-2 tw-text-[#fff]">Ajouter un Article</a>
            </div>
        </div>

        <!-- Articles Récents -->
        <div class="tw-bg-white tw-rounded-lg tw-shadow-md tw-p-6">
            <div class="tw-flex tw-justify-between tw-items-center tw-mb-4">
                <h2 class="tw-text-xl tw-font-semibold tw-text-gray-800">Articles récents</h2>
                <button class="tw-bg-teal-600 tw-text-white tw-py-2 tw-px-4 tw-rounded-md hover:tw-bg-teal-700">Voir tous</button>
            </div>
            <div class="tw-overflow-x-auto">
                <table class="tw-w-full tw-text-left tw-border-collapse">
                    <thead>
                        <tr class="tw-bg-gray-100">
                            <th class="tw-py-3 tw-px-4 tw-text-gray-600">ID</th>
                            <th class="tw-py-3 tw-px-4 tw-text-gray-600">Titre</th>
                            <th class="tw-py-3 tw-px-4 tw-text-gray-600">image</th>
                            <th class="tw-py-3 tw-px-4 tw-text-gray-600">Publié</th>
                            <th class="tw-py-3 tw-px-4 tw-text-gray-600">Partageable</th>
                            <th class="tw-py-3 tw-px-4 tw-text-gray-600">Commentable</th>
                            <th class="tw-py-3 tw-px-4 tw-text-gray-600">Autheur</th>
                            <th class="tw-py-3 tw-px-4 tw-text-gray-600">Category</th>
                            <th class="tw-py-3 tw-px-4 tw-text-gray-600">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr class="tw-border-b">
                                <td class="tw-py-3 tw-px-4">ART-0 {{$article->id}} </td>
                                <td class="tw-py-3 tw-px-4"> {{$article->title}} </td>
                                <td class="tw-py-3 tw-px-4">
                                    <img 
                                    src="{{ $article->imageUrl()}}" 
                                    class="tw-w-16 tw-h-10 tw-cursor-pointer tw-rounded-sm tw-border"
                                    alt="{{$article->title}}">
                                </td>
                                <td class="tw-py-3 tw-px-4">
                                    @if ($article->isActive == 1)
                                        <span class="tw-text-green-500 tw-bg-teal-200/10 tw-p-1">Active</span>
                                    @else
                                        <span class="tw-text-red-400 tw-bg-teal-200/10 tw-p-1">Desactive</span>
                                    @endif
                                </td>
                                <td class="tw-py-3 tw-px-4">
                                    @if ($article->isSharable == 1)
                                        <span class="tw-text-green-500 tw-bg-teal-200/10 tw-p-1">Active</span>
                                    @else
                                        <span class="tw-text-red-400 tw-bg-teal-200/10 tw-p-1">desactive</span>
                                    @endif
                                </td>
                                <td class="tw-py-3 tw-px-4">
                                    @if ($article->isComment == 1)
                                        <span class="tw-text-green-500 tw-bg-teal-200/10 tw-p-1">Active</span>
                                    @else
                                        <span class="tw-text-red-400 tw-bg-teal-200/10 tw-p-1">Desactive</span>
                                    @endif
                                </td>
                                <td class="tw-py-3 tw-px-1 lg:tw-px-3">
                                <div class="tw-flex tw-justify-between">
                                        <a href="{{route('profile.edit')}}">
                                            <img 
                                                src="{{ asset('back_auth/assets/profile/'.$article->author->image) }}" 
                                                class="tw-w-10 tw-h-10 tw-cursor-pointer tw-rounded-full tw-border"
                                                alt="User"
                                            >
                                        </a>
                                    <a href="{{route('profile.edit')}}" class="tw-text-sm tw-pt-3 hover:tw-text-teal-200">{{explode(' ', $article->author->name)[1]}}</a>
                                </div>
                                </td>
                                <td class="tw-py-3 tw-px-4">{{$article->category->name}} </td>
                                <td class="tw-py-3 tw-px-4">
                                    <div x-data="{openAction: false}" class="dropdown dropdown-action tw-flex tw-justify-around">
                                        
                                        <div x-show="openAction" x-transition x-cloak class="tw-flex tw-flex-col tw-gap-1 tw-px-2 tw-py-2 tw-bg-[#eff5f569] tw-text-[#fff] tw-rounded-sm">
                                            <a class="tw-bg-teal-700 hover:tw-bg-[#00968798] tw-border-[#12131327] tw-p-1 tw-rounded-md tw-border" href="{{ route('article.show', $article)}}">
                                                <i class="fas fa-eye tw-m-r-5 tw-text-[#fff]"></i> Voir
                                            </a>
                                            <a class="tw-bg-teal-700 hover:tw-bg-[#00968798] tw-border-[#12131327] tw-p-1 tw-rounded-md tw-border" href="{{ route('article.edit', $article)}}">
                                                <i class="fas fa-pencil-alt tw-m-r-5 tw-text-[#fff]"></i> Modifier
                                            </a>
                                            <form action="{{route('article.destroy', $article)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="tw-flex tw-items-center tw-bg-red-600 hover:tw-bg-[#d47070] tw-border-[#12131327] tw-p-1 tw-rounded-md tw-border">
                                                    <i class="fas fa-trash-alt tw-m-r-5 tw-text-[#fff]"></i> Supprimer
                                                </button>
                                            </form>
                                        </div>
                                        <a @click="openAction = !openAction" href="javascript:void(0);" class="dropdown-toggle tw-pt-3" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v ellipse_color"></i>
                                        </a>
                                    </div>
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