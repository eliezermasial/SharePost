<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"/>
    <title>@yield('title')</title>
    <meta name="description" content="Dashboard" />

    <!-- Dashboard - Links -->
    @include('back.partials.styles')
    <!--# Fin Dashbord Link #}-->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <style>
    [x-cloak] { display: none !important; }
  </style>

 <body class="tw-font-sans" x-data="{ open: false }">

  <div class="tw-flex tw-h-screen tw-flex-col md:tw-flex-row">
      <!-- Sidebar -->
        @include('back.partials.sidebar')
    
      <div class="tw-flex-1 tw-flex tw-flex-col">
          <!-- Header -->
          @include('back.partials.header')
          
          <!-- Main Content -->
          <main class="tw-h-full">
            @yield('content')
          </main>
      </div>
  </div>
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
