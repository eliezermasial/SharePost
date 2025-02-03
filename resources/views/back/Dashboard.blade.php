@extends('back.layout.app')

@section('title', 'Dashboard-Accueil')

@section('content')

<div class="tw-p-6 tw-bg-cyan-50 tw-min-h-screen">
    <!-- Titre et Message de Bienvenue -->
    <div class="tw-mt-4 tw-mb-8">
        <h1 class="tw-text-2xl tw-font-bold tw-text-gray-800">Hello, Bonjour eliezer tamba !</h1>
        <p class="tw-text-lg tw-text-gray-600">Dashboard</p>
    </div>

    <!-- Statistiques -->
    <div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-2 lg:tw-grid-cols-4 tw-gap-6 tw-mb-8">
        <!-- Total Articles -->
        <div class="tw-bg-white tw-rounded-lg tw-shadow-md tw-p-6 tw-flex tw-items-center tw-justify-between">
            <div>
                <p class="tw-text-3xl tw-font-semibold tw-text-teal-600">236</p>
                <p class="tw-text-sm tw-text-gray-600">Total Articles</p>
            </div>
            <i class="fa fa-user-plus fa-2x tw-text-teal-600"></i>
        </div>

        <!-- Total Catégories -->
        <div class="tw-bg-white tw-rounded-lg tw-shadow-md tw-p-6 tw-flex tw-items-center tw-justify-between">
            <div>
                <p class="tw-text-3xl tw-font-semibold tw-text-teal-600">10</p>
                <p class="tw-text-sm tw-text-gray-600">Total Catégories</p>
            </div>
            <i class="fa fa-dollar-sign fa-2x tw-text-teal-600"></i>
        </div>

        <!-- Total Commentaires -->
        <div class="tw-bg-white tw-rounded-lg tw-shadow-md tw-p-6 tw-flex tw-items-center tw-justify-between">
            <div>
                <p class="tw-text-3xl tw-font-semibold tw-text-teal-600">1538</p>
                <p class="tw-text-sm tw-text-gray-600">Total Commentaires</p>
            </div>
            <i class="fa fa-file-alt fa-2x tw-text-teal-600"></i>
        </div>

        <!-- Abonnements -->
        <div class="tw-bg-white tw-rounded-lg tw-shadow-md tw-p-6 tw-flex tw-items-center tw-justify-between">
            <div>
                <p class="tw-text-3xl tw-font-semibold tw-text-teal-600">364</p>
                <p class="tw-text-sm tw-text-gray-600">Abonnements</p>
            </div>
            <i class="fa fa-globe fa-2x tw-text-teal-600"></i>
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
                        <th class="tw-py-3 tw-px-4 tw-text-gray-600">ID Articles</th>
                        <th class="tw-py-3 tw-px-4 tw-text-gray-600">Image</th>
                        <th class="tw-py-3 tw-px-4 tw-text-gray-600">Titre</th>
                        <th class="tw-py-3 tw-px-4 tw-text-gray-600">Catégories</th>
                        <th class="tw-py-3 tw-px-4 tw-text-gray-600">Auteur</th>
                        <th class="tw-py-3 tw-px-4 tw-text-gray-600">Publication</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tw-border-b">
                        <td class="tw-py-3 tw-px-4">ART-0001</td>
                        <td class="tw-py-3 tw-px-4">eliezer tamba</td>
                        <td class="tw-py-3 tw-px-4">Intelligence artificielle</td>
                        <td class="tw-py-3 tw-px-4">Tech</td>
                        <td class="tw-py-3 tw-px-4">John Doe</td>
                        <td class="tw-py-3 tw-px-4">
                            <span class="tw-bg-teal-600 tw-text-white tw-py-1 tw-px-3 tw-rounded-md">PUBLIÉ</span>
                        </td>
                    </tr>
                    <!-- Ajouter d'autres lignes ici si nécessaire -->
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection