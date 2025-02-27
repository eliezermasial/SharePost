<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"/>
    <title>@yield('title')</title>
    <meta name="description" content="Dashboard" />
    @include('home.partials.script')
    
  </head>

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
    [x-cloak] { display: none !important; }
  </style>

 <body class="tw-font-sans " x-data="{ open: false, start: false }">
    <!-- tobard -->
    @include('home.partials.tobard')

    <!-- Header -->
    @include('home.partials.header')

    <!-- Breaking News -->
    @include('home.partials.news')

    <!-- Main Content -->
    <main class="tw-h-full">
      
    </main>

    <!-- footer -->
    @include('home.partials.footer')
    
  </body>
</html>
