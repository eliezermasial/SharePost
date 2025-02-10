@extends('back.layout.app')

@section('title', 'Create Article')

@section('content')
<div class="tw-px-6 tw-pt-8 tw-pb-10 tw-h-full">
    <div class="tw-my-5 tw-pb-6">
        <h2 class="tw-text-2xl tw-font-semibold">Modifier un article</h2>
    </div>

    <div class=" tw-p-4 tw-mt tw-shadow-md tw-border-2 tw-border-spacing-2 tw-rounded-lg">
        
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

@endsection