<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"/>
    <title>@yield('title')</title>
    <meta name="description" content="Dashboard" />
    
  </head>

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
    [x-cloak] { display: none !important; }
  </style>

 <body class="tw-font-sans " x-data="{ open: false, openMenu: false }">

    <!-- Header -->

    <!-- Main Content -->
    <main class="tw-h-full">
      
    </main>

    <!-- footer -->
    @include('home.partials.footer')
    
  </body>
</html>
