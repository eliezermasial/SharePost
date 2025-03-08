<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"/>
    <title>@yield('title')</title>
    <meta name="description" content="Dashboard" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('back_auth/assets/img/logo.png') }}" width="100" height="100">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  </head>

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
    [x-cloak] { display: none !important; }
  </style>

 <body class="tw-font-sans" x-data="{ open: false, start: false }">

    <!-- Header -->
    @include('home.partials.header')

    <!-- sider -->
    @include('home.partials.sider')
    
    <!-- Main Content -->
    <main class="tw-h-full tw-bg-gray-100 tw-py-10">
      @yield('content')
    </main>

    <!-- footer -->
    @include('home.partials.footer')

    <!-- script BreakNews -->
    <style>
      @keyframes tickerScroll {
        from {
          transform: translateX(100%);
        }
        to {
          transform: translateX(-100%);
        }
      }

      .tw-animate-scroll {
        animation: tickerScroll 40s linear infinite;
        display: flex;
        min-width: max-content;
      }
    </style>
  </body>
</html>
