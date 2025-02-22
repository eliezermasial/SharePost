@section('message', __($exception->getMessage() ?: 'Forbidden'))

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Ajoute le préfixe tw- */
        .tw-font-custom { font-family: 'Inter', sans-serif; }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body  class="tw-bg-gray-100 tw-flex tw-flex-col tw-gap-4 tw-justify-center tw-items-center tw-h-screen">
    <h1 class="tw-text-xl tw-font-bold tw-text-teal-500">403</h1>
    <p class="tw-text-xl tw-font-semibold tw-text-gray-700">Oops! Accès non autorisé!</p>
    <p class="tw-text-gray-500 tw-mt-2">La page que vous cherchez est privée.</p>

    <a href="{{route('dashboard')}}" class="tw-inline-block tw-bg-teal-500 tw-text-white tw-px-6 tw-py-3 tw-rounded-lg tw-text-lg tw-font-semibold tw-shadow-md hover:tw-bg-teal-600">
        Retournez à la page d'accueil
    </a>
</body>
</html>
