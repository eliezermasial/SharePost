@extends('back.layout.app')

@section('title', 'my profile')

@section('content')

<div x-data="{openForm : false}" class="tw-p-6 tw-bg-cyan-50 tw-min-h-screen">
    <div class="tw-pt-16 tw-pb-3 md:tw-ml-56 md:tw-pl-6">
        <!-- Titre de la page -->
        <div class="tw-p-6 tw-pb-4">
            <h2 class="tw-text-2xl tw-font-semibold tw-text-gray-700">Modifier le Profil</h2>
        </div>

        <!-- Section Profil -->
        <div class="tw-flex tw-items-center tw-my-5 md:tw-ml-6 tw-px-4 tw-py-3 tw-bg-[#fff] tw-rounded-md tw-shadow-md">
            <img src="{{ asset('back_auth/assets/profile/' . Auth::user()->image) }}" 
                alt="Photo de Profil" 
                class="tw-w-20 tw-h-20 tw-rounded-full tw-border tw-border-gray-300 tw-mr-4">
            <div>
                <h3 class="tw-text-xl tw-font-semibold tw-text-gray-800">{{ Auth::user()->name }}</h3>
                <p class="tw-text-gray-500">Administrateur</p>
            </div>
        </div>

        <!-- Informations et Bouton Modifier -->
        <div class="tw-flex tw-bg-[#fff] tw-justify-between md:tw-ml-6 tw-px-4 tw-py-7 tw-items-start tw-flex-wrap tw-space-y-4 md:tw-space-y-0 md:tw-space-x-4 tw-rounded-md tw-shadow-md">
            <!-- Informations Utilisateur -->
            <div class="infos tw-w-full md:tw-w-2/3 tw-space-y-4">
                <div class="tw-border-b tw-border-gray-100 tw-pb-4">
                    <p class="tw-text-gray-600">Nom</p>
                    <p class="tw-font-medium tw-text-gray-800">{{ explode(' ', Auth::user()->name)[1] }}</p>
                </div>
                <div class="tw-border-b tw-border-gray-100 tw-pb-4">
                    <p class="tw-text-gray-600">Email</p>
                    <p class="tw-font-medium tw-text-gray-800">{{ Auth::user()->email }}</p>
                </div>
                <div class="tw-border-b tw-border-gray-100 tw-pb-4">
                    <p class="tw-text-gray-600">Prénom</p>
                    <p class="tw-font-medium tw-text-gray-800"> {{explode(' ', Auth::user()->name)[0]}} </p>
                </div>
            </div>

            <!-- Bouton Modifier -->
            <div class="edit-profile tw-w-full md:tw-w-auto tw-flex tw-justify-end">
                <button @click="openForm = true" 
                    class="tw-bg-teal-500 tw-text-white tw-py-2 tw-px-4 tw-rounded-md hover:tw-bg-teal-600 tw-flex tw-items-center tw-space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tw-w-5 tw-h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L9.44 17.212a4.5 4.5 0 01-1.897 1.13l-3.362 1.008 1.008-3.362a4.5 4.5 0 011.13-1.897L16.863 4.487z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 6.75L17.25 4.5" />
                    </svg>
                    <span>Modifier</span>
                </button>
            </div>
        </div>

        <!-- Formulaire de modification en pop-up -->
        <div x-show="openForm" x-cloak
            class="tw-fixed tw-inset-0 tw-bg-black tw-bg-opacity-50 tw-flex tw-justify-center tw-items-center tw-z-50" 
            @click.away="openForm = false"
            x-transition:enter="tw-transition tw-ease-out tw-duration-300"
            x-transition:enter-start="tw-opacity-0 tw-translate-x-full"
            x-transition:enter-end="tw-opacity-100 tw-translate-x-0"
            x-transition:leave="tw-transition tw-ease-in tw-duration-200"
            x-transition:leave-start="tw-opacity-100"
            x-transition:leave-end="tw-opacity-0 tw--translate-y-4">

            <div class="tw-bg-white tw-p-6 tw-rounded-lg tw-shadow-lg tw-w-full md:tw-w-1/3">
                <h3 class="tw-text-xl tw-font-semibold tw-text-gray-700 tw-mb-4">Modifier les Informations</h3>
                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <!-- Nom -->
                    <div class="tw-mb-4">
                        <label class="tw-block tw-text-gray-700 tw-font-medium tw-mb-2">Nom</label>
                        <input type="text" name="name" value="{{ Auth::user()->name }}" 
                           class="tw-border tw-border-gray-300 tw-rounded-lg tw-p-2 tw-w-full tw-focus:tw-border-teal-500">
                    </div>

                    <!-- Email -->
                    <div class="tw-mb-4">
                        <label class="tw-block tw-text-gray-700 tw-font-medium tw-mb-2">Email</label>
                        <input type="email" name="email" value="{{ Auth::user()->email }}" 
                           class="tw-border tw-border-gray-300 tw-rounded-lg tw-p-2 tw-w-full tw-focus:tw-border-teal-500">
                    </div>

                    <!-- Prénom -->
                    <div class="tw-mb-4">
                        <label class="tw-block tw-text-gray-700 tw-font-medium tw-mb-2">Prénom</label>
                        <input type="file" name="image" value="{{ Auth::user()->prenom }}" 
                           class="tw-border tw-border-gray-300 tw-rounded-lg tw-p-2 tw-w-full tw-focus:tw-border-teal-500">
                    </div>

                    <!-- Boutons -->
                    <div class="tw-flex tw-justify-end tw-space-x-2">
                        <button type="button" @click="openForm = false" 
                            class="tw-bg-gray-300 tw-text-gray-700 tw-py-2 tw-px-4 tw-rounded-lg hover:tw-bg-gray-400">
                            Annuler
                        </button>
                        <button type="submit" 
                            class="tw-bg-teal-600 tw-text-white tw-py-2 tw-px-4 tw-rounded-lg hover:tw-bg-teal-700">
                            Enregistrer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


