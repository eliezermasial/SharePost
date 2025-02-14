@extends('back.layout.app')

@section('title', isset($article) && $article->exists() ? 'editer article'.' '.$article->title : 'Create Article')

@section('content')

@if (Route::currentRouteName() == 'article.edit')
    <div class="tw-bg-cyan-50 tw-px-6 tw-pt-8 tw-pb-10 tw-h-full">
        <div class="tw-my-4 tw-pb-5">
            <h2 class="tw-text-2xl tw-font-semibold">Modifier les informations de l'article : {{$article->title}} </h2>
        </div>

        <div class="tw-bg-[#fff] tw-p-4 tw-shadow-md tw-border-2 tw-border-spacing-2 tw-rounded-lg">
            <div class="tw-mb-4">
                <img src="{{ $article->imageUrl()}}" class="tw-w-full tw-h-52 tw-cursor-pointer tw-rounded-sm tw-border"alt="{{$article->title}}">
            </div>
            
            <form action="{{ route('article.update', $article)}}" method="POST" enctype="multipart/form-data" class="tw-space-y-6 tw-text-[#242323c9]">
                
                @csrf
                @method('PATCH')
                <div class="tw-flex tw-flex-col sm:tw-flex-row tw-justify-between tw-gap-4">
                    <div>
                        <label class="tw-block tw-mb-2">Titre</label>
                        <input type="text" name="title" class="max-md:tw-w-full tw-p-2 tw-rounded-md tw-border-2 tw-border-[#2423236e]  focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600" value=" {{ isset($article) ? old('title', $article->title) : old('title') }}" placeholder="titre de l'article">
                    </div>
                    <div>
                        <label class="tw-block tw-mb-2">Catégorie</label>
                        <select name="category_id" class="max-md:tw-w-full tw-appearance-none tw-p-2 tw-rounded-md tw-border-2 tw-border-[#2423236e] focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600">
                            <option value="">Sélectionner une catégorie</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id}}" 
                                    {{ old('category_id', isset($article) ? $article->category_id : '') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="">
                        <label class="tw-block tw-mb-2">image</label>
                        <input type="file" name="image" class="max-md:tw-w-full tw-p-1 tw-rounded-md tw-border-2 tw-border-[#2423236e]  focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600" value="{{old('image')}}">
                    </div>
                </div>

                <div>
                    <label class="tw-block">Contenu</label>
                    <textarea name="content" rows="5" class="tw-w-full tw-p-2 tw-my-2 tw-rounded-md tw-border-2 tw-border-[#2423236e] focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600">{{ old('content', isset($article) ? $article->content : '') }}</textarea>
                </div>

                <div x-data="tagsManager({{ isset($article) ? json_encode($article->tags->pluck('name')->toArray()) : '[]' }})" class="tw-space-y-4">
                    <!-- Liste des Tags existants -->
                    <div class="tw-flex tw-flex-wrap tw-gap-2">
                        <template x-for="(tag, index) in tags" :key="index">
                            <span class="tw-flex tw-items-center tw-bg-teal-600 tw-text-white tw-text-sm tw-px-3 tw-py-1 tw-rounded-md tw-font-semibold">
                                <span x-text="tag"></span>
                                <button type="button" class="tw-ml-2 tw-text-white tw-font-bold" @click="removeTag(index)">×</button>
                            </span>
                        </template>
                    </div>
                
                    <!-- Champ d'ajout de tag -->
                    <div class="tw-flex tw-items-center tw-gap-2">
                        <input 
                            type="text" 
                            x-model="newTag" 
                            @keydown.enter.prevent="addTag()" 
                            class="tw-w-full tw-p-2 tw-rounded-md tw-border-2 tw-border-gray-300 focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600" 
                            placeholder="Ajouter un tag..."
                        >
                        <button type="button" @click="addTag()" class="tw-bg-teal-600 tw-text-white tw-px-3 tw-py-1 tw-rounded-md">
                            Ajouter
                        </button>
                    </div>
                
                    <!-- Champ caché pour soumettre les tags -->
                    <input type="hidden" name="tags" :value="tagsString">
                </div>
        
                <div class="tw-flex tw-items-center tw-justify-between tw-space-x-4">
                    <label class="tw-flex tw-items-center">
                        <input type="hidden" name="isActive" value="0">
                        <input type="checkbox" name="isActive" value="1"
                            class="tw-mr-2 tw-border-2 tw-border-[#2423236e] focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600 checked:tw-bg-teal-600 checked:focus:tw-bg-teal-600"
                            {{ old('isActive', isset($article) ? $article->isActive : 0) == 1 ? 'checked' : '' }}>
                        Actif
                    </label>
                    
                    <label class="tw-flex tw-items-center">
                        <input type="hidden" name="isComment" value="0">
                        <input type="checkbox" name="isComment" value="1"
                            class="tw-mr-2 tw-border-2 tw-border-[#2423236e] focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600 checked:tw-bg-teal-600 checked:focus:tw-bg-teal-600"
                            {{ old('isComment', isset($article) ? $article->isComment : 0) == 1 ? 'checked' : '' }}>
                        Commentaires
                    </label>
                    
                    <label class="tw-flex tw-items-center">
                        <input type="hidden" name="isSharable" value="0">
                        <input type="checkbox" name="isSharable" value="1"
                            class="tw-mr-2 tw-border-2 tw-border-[#2423236e] focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600 checked:tw-bg-teal-600 checked:focus:tw-bg-teal-600"
                            {{ old('isSharable', isset($article) ? $article->isSharable : 0) == 1 ? 'checked' : '' }}>
                        Partageable
                    </label>
                </div>

                <div class="max-md:tw-text-center tw-pb-2">
                    <button type="submit" class="tw-w-full md:tw-w-1/2 tw-bg-teal-600 tw-text-white tw-py-2 tw-px-4 tw-rounded-md hover:tw-bg-teal-500">
                        Enregistrer
                    </button>
                </div>
                
            </form>
        </div>
    </div>

@else
    
    <div class="tw-bg-cyan-50 tw-px-6 tw-pt-8 tw-pb-10 tw-h-full">
        <div class="tw-my-4 tw-pb-5">
            <h2 class="tw-text-2xl tw-font-semibold">creer un article</h2>
        </div>

        <div class="tw-bg-[#fff] tw-p-4 tw-shadow-md tw-border-2 tw-border-spacing-2 tw-rounded-lg">
            
            <form action="{{route('article.store')}}" method="POST" enctype="multipart/form-data" class="tw-space-y-6 tw-text-[#242323c9]">
                
                @csrf
                
                <div class="tw-flex tw-flex-col sm:tw-flex-row tw-justify-between tw-gap-4">
                    <div>
                        <label class="tw-block tw-mb-2">Titre</label>
                        <input type="text" name="title" class="max-md:tw-w-full tw-p-2 tw-rounded-md tw-border-2 tw-border-[#2423236e]  focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600" value="{{old('title')}}" placeholder="titre de l'article">
                    </div>
                    <div>
                        <label class="tw-block tw-mb-2">Catégorie</label>
                        <select name="category_id" class="max-md:tw-w-full tw-appearance-none tw-p-2 tw-rounded-md tw-border-2 tw-border-[#2423236e]  focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600" value="{{old('category_id')}}">
                            <option value="">Sélectionner une catégorie</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="">
                        <label class="tw-block tw-mb-2">image</label>
                        <input type="file" name="image" class="max-md:tw-w-full tw-p-1 tw-rounded-md tw-border-2 tw-border-[#2423236e]  focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600" value="{{old('image')}}">
                    </div>
                </div>

                <div>
                    <label class="tw-block ">Contenu</label>
                    <textarea name="content" rows="5" class="tw-w-full tw-p-2 tw-rounded-md tw-border-2 tw-border-[#2423236e]  focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600"></textarea>
                </div>
                <div x-data="tagsManager({{ isset($article) ? json_encode($article->tags->pluck('name')->toArray()) : '[]' }})" class="tw-space-y-4">
                    <!-- Liste des Tags existants -->
                    <div class="tw-flex tw-flex-wrap tw-gap-2">
                        <template x-for="(tag, index) in tags" :key="index">
                            <span class="tw-flex tw-items-center tw-bg-teal-600 tw-text-white tw-text-sm tw-px-3 tw-py-1 tw-rounded-full tw-font-semibold">
                                <span x-text="tag"></span>
                                <button type="button" class="tw-ml-2 tw-text-white tw-font-bold" @click="removeTag(index)">×</button>
                            </span>
                        </template>
                    </div>
                
                    <!-- Champ d'ajout de tag -->
                    <div class="tw-flex tw-items-center tw-gap-2">
                        <input 
                            type="text" 
                            x-model="newTag" 
                            @keydown.enter.prevent="addTag()" 
                            class="tw-w-full tw-p-2 tw-rounded-md tw-border-2 tw-border-gray-300 focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600" 
                            placeholder="Ajouter un tag..."
                        >
                        <button type="button" @click="addTag()" class="tw-bg-teal-600 tw-text-white tw-px-3 tw-py-1 tw-rounded-md">
                            Ajouter
                        </button>
                    </div>
                
                    <!-- Champ caché pour soumettre les tags -->
                    <input type="hidden" name="tags" :value="tagsString">
                </div>
        
                <div class="tw-flex tw-items-center tw-justify-between tw-space-x-4">
                    <label class="tw-flex tw-items-center">
                        <input type="hidden" name="isActive" value="0">
                        <input type="checkbox" name="isActive" value="1" 
                            class="tw-mr-2 tw-border-2 tw-border-[#2423236e] focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600 checked:tw-bg-teal-600 checked:focus:tw-bg-teal-600" 
                            {{ old('isActive') ? 'checked' : '' }}>
                        Actif
                    </label>
                    
                    <label class="tw-flex tw-items-center">
                        <input type="hidden" name="isComment" value="0">
                        <input type="checkbox" name="isComment" value="1" 
                            class="tw-mr-2 tw-border-2 tw-border-[#2423236e] focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600 checked:tw-bg-teal-600 checked:focus:tw-bg-teal-600" 
                            {{ old('isComment') ? 'checked' : '' }}>
                        Commentaires
                    </label>
                    
                    <label class="tw-flex tw-items-center">
                        <input type="hidden" name="isSharable" value="0">
                        <input type="checkbox" name="isSharable" value="1" 
                            class="tw-mr-2 tw-border-2 tw-border-[#2423236e] focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600 checked:tw-bg-teal-600 checked:focus:tw-bg-teal-600" 
                            {{ old('isSharable') ? 'checked' : '' }}>
                        Partageable
                    </label>
                </div>

                <div class="max-md:tw-text-center tw-pb-2">
                    <button type="submit" class="tw-w-full md:tw-w-1/2 tw-bg-teal-600 tw-text-white tw-py-2 tw-px-4 tw-rounded-md hover:tw-bg-teal-500">
                        Enregistrer
                    </button>
                </div>
                
            </form>
        </div>
    </div>
@endif

@endsection