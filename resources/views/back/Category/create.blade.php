@extends('back.layout.app')

@section('title', isset($categorie) && $categorie->exists ? 'Modifier catégorie' : 'Créer une catégorie')

@section('content')

    @if (Route::currentRouteName() == 'category.edit')

        <div class="tw-px-6 tw-pt-8 tw-bg-cyan-50 tw-h-full">
            <h2 class="tw-text-2xl tw-font-semibold tx-mt-6"> Editer une Catégorie </h2>
            <form action="{{ route('category.update', $categorie)}}" method="POST" class="tw-bg-white tw-p-6 tw-mt-10 tw-shadow tw-rounded-lg">
                @csrf
                @method('PATCH')
                <div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-3 tw-gap-4">
                    <div class="tw-form-group">
                        <label class="tw-block tw-font-medium">Nom de la catégorie</label>
                        <input type="text" name="name" value="{{old('name', $categorie->name)}}" class="tw-w-full tw-border tw-px-4 tw-py-2 tw-rounded-lg">
                    </div>
                    <div class="tw-form-group">
                        <label class="tw-block tw-font-medium">Description</label>
                        <textarea name="description" class="tw-w-full tw-border tw-px-4 tw-py-2 tw-rounded-lg" rows="5"></textarea>
                    </div>
                    <div class="tw-form-group">
                        <label class="tw-block tw-font-medium"> Activation </label>
                        <select name="isActive" class="tw-w-full tw-border tw-px-4 tw-py-2 tw-rounded-lg">
                            <option @if ($categorie->isActive == 1) selected @endif value="1">Activer</option>
                            <option @if ($categorie->isActive == 0) selected @endif value="0">Ne pas activer</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="tw-mt-4 tw-bg-teal-600 tw-text-white tw-px-4 tw-py-2 tw-rounded-lg tw-w-full md:tw-w-auto">Enregistrer</button>
            </form>
        </div>

    @else
    
        <div class="tw-px-6 tw-pt-8 !tw-mb-0 tw-bg-cyan-50 tw-h-full">
            <h2 class="tw-text-2xl tw-font-semibold tx-mt-6">Créer une Catégorie</h2>
            <form action="{{ route('category.store')}}" method="POST" class="tw-bg-white tw-p-6 tw-mt-10 tw-shadow tw-rounded-lg">
                @csrf
                <div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-3 tw-gap-4">
                    <div class="">
                        <label class="tw-block tw-font-medium">Nom de la catégorie</label>
                        <input type="text" name="name" class="tw-w-full tw-border tw-px-4 tw-py-2 tw-mt-3 tw-rounded-lg">
                    </div>
                    <div class="tw-form-group">
                        <label class="tw-block tw-font-medium">Description</label>
                        <textarea name="description" class="tw-w-full tw-border tw-px-4 tw-py-2 tw-mt-3 tw-rounded-lg" rows="5"></textarea>
                    </div>
                    <div class="tw-form-group">
                        <label class="tw-block tw-font-medium">Activation</label>
                        <select name="isActive" class="tw-w-full tw-border tw-px-4 tw-py-2 tw-mt-3 tw-rounded-lg">
                            <option value="1">Activer</option>
                            <option value="0">Ne pas activer</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="tw-mt-4 tw-bg-teal-600 tw-text-white tw-px-4 tw-py-2 tw-rounded-lg tw-w-full md:tw-w-auto">Enregistrer</button>
            </form>
        </div>
    @endif

@endsection
