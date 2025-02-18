@extends('back.layout.app')

@section('title', isset($categorie) && $categorie->exists ? 'Modifier catégorie' : 'Créer une catégorie')

@section('content')

    @if (Route::currentRouteName() == 'category.edit')

        <div class="tw-px-6 tw-pt-8 tw-bg-cyan-50 tw-h-screen">
            <div class="tw-pt-16 tw-pb-3 md:tw-ml-56 md:tw-pl-6">
                <!-- Titre et Message de Bienvenue -->
                <div class=" tw-flex tw-justify-between tw-py-5 tw-mb-5 md:tw-mb-7">
                    <h1 class="tw-text-2xl tw-font-bold tw-text-gray-800">Editer une Catégorie</h1>
                </div>
                
                <form action="{{ route('category.update', $categorie)}}" method="POST" class="tw-bg-white tw-p-6 tw-mt-8 tw-shadow tw-rounded-lg">
                    @csrf
                    @method('PATCH')
                    <div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-3 tw-gap-4">
                        <div class="tw-form-group">
                            <label class="tw-block tw-font-medium tw-mb-3">Nom de la catégorie</label>
                            <input type="text" name="name" value="{{old('name', $categorie->name)}}" class="tw-w-full tw-border tw-px-4 tw-py-2 tw-rounded-lg">
                        </div>
                        <div class="tw-form-group">
                            <label class="tw-block tw-font-medium tw-mb-3">Description</label>
                            <textarea name="description" class="tw-w-full tw-border tw-px-4 tw-py-2 tw-rounded-lg" rows="5"></textarea>
                        </div>
                        <div class="tw-form-group">
                            <label class="tw-block tw-font-medium tw-mb-3"> Activation </label>
                            <select name="isActive" class="tw-w-full tw-border tw-px-4 tw-py-2 tw-rounded-lg">
                                <option @if ($categorie->isActive == 1) selected @endif value="1">Activer</option>
                                <option @if ($categorie->isActive == 0) selected @endif value="0">Ne pas activer</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="tw-mt-4 tw-bg-teal-600 tw-text-white tw-px-4 tw-py-2 tw-rounded-lg tw-w-full md:tw-w-auto">Enregistrer</button>
                </form>
            </div>
        </div>

    @else
    
        <div class="tw-p-6 tw-bg-cyan-50 tw-min-h-screen">
            <div class="tw-pt-16 tw-pb-3 md:tw-ml-56 md:tw-pl-6">
                <!-- Titre et Message de Bienvenue -->
                <div class=" tw-flex tw-justify-between tw-py-5 tw-mb-5 md:tw-mb-7">
                    <h1 class="tw-text-2xl tw-font-bold tw-text-gray-800">Créer une Catégorie</h1>
                </div>
                <form action="{{ route('category.store')}}" method="POST" class="tw-bg-white tw-p-6  md:tw-mt-10 tw-shadow tw-rounded-lg">
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
        </div>
    @endif

@endsection
