<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Dashboard - Links -->
    @include('back.partials.styles')
    <!--# Fin Dashbord Link #}-->
    
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')

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
</body>
</html>
