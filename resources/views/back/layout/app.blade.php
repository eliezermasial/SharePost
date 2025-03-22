<!DOCTYPE html>
<html lang="fr">
  <head>

    <link rel="icon" type="image/png" href="{{ asset('back_auth/assets/img/logo.png') }}" width="100" height="100">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"/>
    <title>@yield('title')</title>
    <meta name="description" content="Dashboard" />

    <!-- Dashboard - Links -->
    @include('back.partials.styles')
    <!--# Fin Dashbord Link #}-->
    
  </head>

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
    [x-cloak] { display: none !important; }
  </style>

 <body class="tw-font-sans " x-data="{ open: false, openMenu: false }">

    <!-- Header -->
    @include('back.partials.header')

    <!-- Sidebar -->
    @include('back.partials.sidebar')

    <!-- Main Content -->
    <main class="tw-h-full">
      @yield('content')
    </main>
    
    <!-- scripty js -->
    @include('back.partials.scripts')
    
    @if (session('success'))
      <script>
        iziToast.success({
          title: 'succès',
          message: '{{ session('success') }}',
          position: 'topRight'
        });
      </script>
    @endif

    @if (session('error'))
      <script>
          iziToast.error({
            title: 'Erreur',
            message: '{{ session('error') }}',
            position: 'topRight'
            });
      </script>
    @endif
  </body>
</html>
