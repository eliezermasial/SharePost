@extends('back.layout.app')

@section('title', 'categorie')

@section('content')

    <div class="tw-p-6 tw-bg-cyan-50 tw-min-h-screen">
        <div class="tw-pt-16 tw-pb-3 md:tw-ml-56 md:tw-pl-6">
        <!-- Titre et Message de Bienvenue -->
        <div class=" tw-flex max-md:tw-flex-col max-md:tw-gap-6 tw-justify-between tw-py-5 tw-mb-7">
            <h1 class="tw-text-2xl tw-font-bold tw-text-gray-800">Categories</h1>
            <div>
                <a href="{{route('category.create')}}" class="tw-bg-teal-700 veiwbutton tw-rounded-md tw-p-2 tw-text-[#fff]">Ajouter une categorie</a>
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
                            <th class="tw-py-3 tw-px-4 tw-text-gray-600">ID categorie</th>
                            <th class="tw-py-3 tw-px-4 tw-text-gray-600">Nom</th>
                            <th class="tw-py-3 tw-px-4 tw-text-gray-600">Description</th>
                            <th class="tw-py-3 tw-px-4 tw-text-gray-600">Statut</th>
                            <th class="tw-py-3 tw-px-4 tw-text-gray-600">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $categorie)
                            <tr class="tw-border-b">
                                <td class="tw-py-3 tw-px-4"> {{$categorie->id}} </td>
                                <td class="tw-py-3 tw-px-4">{{$categorie->name}} </td>
                                <td class="tw-py-3 tw-px-4">{{$categorie->description}}</td>
                                <td class="tw-py-3 tw-px-4">
                                    <span class="tw-p-1 tw-rounded-md tw-font-bold tw-w-20 text-center {{ $categorie->isActive == 1 ? 'tw-bg-teal-700' : 'tw-bg-red-400'}}">
                                        {{ $categorie->isActive == 1 ? 'active' : 'disabled' }}
                                    </span>
                                </td>
                                <td class="tw-py-3 tw-px-4">
                                    <div x-data="{openAction: false}" class="dropdown dropdown-action tw-flex tw-justify-around">
                                        
                                        <div x-show="openAction" x-transition x-cloak class="tw-flex tw-flex-col tw-gap-1 tw-px-2 tw-py-2 tw-bg-[#eff5f569] tw-text-[#fff] tw-rounded-sm">
                                            <a class="tw-bg-teal-700 hover:tw-bg-[#00968798] tw-border-[#12131327] tw-p-1 tw-rounded-md tw-border" href="{{ route('category.edit', $categorie)}}"><i class="fas fa-pencil-alt tw-m-r-5 tw-text-[#fff]"></i> Modifier</a>
                                            <form action="{{ route('category.destroy', $categorie)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="tw-bg-red-600 hover:tw-bg-[#d47070] tw-border-[#12131327] tw-p-1 tw-rounded-md tw-border">
                                                    <i class="fas fa-trash-alt tw-m-r-5 tw-text-[#fff]"></i>
                                                    Supprimer
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

