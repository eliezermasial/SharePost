@extends('back.layout.app')

@section('title', 'categorie')

@section('content')

    <div class="tw-p-6 tw-bg-cyan-50 tw-min-h-screen">

        <!-- Titre et Message de Bienvenue -->
        <div class=" tw-flex tw-justify-between tw-mt-4 tw-py-5 tw-mb-8">
            <h1 class="tw-text-2xl tw-font-bold tw-text-gray-800">Categories</h1>
            <a href="{{route('category.create')}}" class="tw-bg-teal-700 veiwbutton tw-rounded-md tw-p-2 tw-text-[#fff]">Ajouter une categorie</a>
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
                            <th class="tw-py-3 tw-px-4 tw-text-gray-600">ID categorie</th>
                            <th class="tw-py-3 tw-px-4 tw-text-gray-600">Nom</th>
                            <th class="tw-py-3 tw-px-4 tw-text-gray-600">Description</th>
                            <th class="tw-py-3 tw-px-4 tw-text-gray-600">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tw-border-b">
                            <td class="tw-py-3 tw-px-4">ART-0001</td>
                            <td class="tw-py-3 tw-px-4">eliezer tamba</td>
                            <td class="tw-py-3 tw-px-4">Intelligence artificielle</td>
                            <td class="class="tw-py-3 tw-px-4"">
                                <div x-data="{openAction: false}" class="dropdown dropdown-action tw-flex tw-justify-around">
                                    
                                    <div x-show="openAction" x-transition x-cloak class="dropdown-menu tw-flex tw-flex-col tw-px-2 tw-py-1 tw-bg-[#009688] tw-text-[#fff]">
                                        <a class="dropdown-item" href=""><i class="fas fa-pencil-alt tw-m-r-5 tw-text-[#fff]"></i> Modifier</a>
                                        <a class="dropdown-item" href="" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt tw-m-r-5 tw-text-[#fff]"></i> Supprimer</a>
                                    </div>
                                    
                                    <a @click="openAction = !openAction" href="javascript:void(0);" class="dropdown-toggle tw-pt-3" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v ellipse_color"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

